<?php
declare(strict_types=1);

namespace App\Extend;

use GuzzleHttp\Client;
use Symfony\Component\Process\Process;
use TightenCo\Jigsaw\Jigsaw;

class DocumentationImporter
{
    const GIT_REPO_URL = 'https://github.com/geocoder-php/Geocoder.git';
    const CLONE_LOCATION = '/tmp/geocoder-build';

    /** @var GithubEmojiReplacer */
    private $emojiReplacer;

    public function __construct()
    {
        $this->emojiReplacer = new GithubEmojiReplacer(new Client());
    }

    public function handle(Jigsaw $jigsaw)
    {
        if ($jigsaw->getEnvironment() !== 'production' && file_exists($jigsaw->getSourcePath() . '/docs/index.md')) {
            return;
        }

        echo 'Updating geocoder repo' . PHP_EOL;

        file_exists(self::CLONE_LOCATION)
            ? $this->updateRepo()
            : $this->cloneRepo();

        echo 'Updating documentation files' . PHP_EOL;

        $this->updateMainDocumentation($jigsaw);
        $this->updateProvidersDocumentation($jigsaw);
    }

    protected function cloneRepo()
    {
        $updateCommand = new Process(['git', 'clone', self::GIT_REPO_URL, self::CLONE_LOCATION, '--branch', 'master']);
        $updateCommand->run();

        return $updateCommand->isSuccessful();
    }

    protected function updateRepo()
    {
        $updateCommand = new Process(['git', 'pull', 'origin', 'master'], self::CLONE_LOCATION);
        $updateCommand->run();

        return $updateCommand->isSuccessful();
    }

    public function updateMainDocumentation(Jigsaw $jigsaw)
    {
        $content = $this->withHeader(
            file_get_contents(self::CLONE_LOCATION . '/README.md'),
            'Geocoder'
        );

        $content = $this->emojiReplacer->replace($content);

        $jigsaw->writeSourceFile('docs/index.md', $content);
    }

    public function updateProvidersDocumentation(Jigsaw $jigsaw)
    {
        $providerFiles = glob(sprintf('%s/src/Provider/*/*.md', self::CLONE_LOCATION));
        $providerReadmeFiles = preg_grep('/README.md$/i', $providerFiles);

        $providerDirectory = $jigsaw->getSourcePath() . '/docs/providers';

        if (!file_exists($providerDirectory)) {
            mkdir($providerDirectory);
        }

        foreach ($providerReadmeFiles as $fileName) {
            $provider = basename(dirname($fileName));
            $file = $this->emojiReplacer->replace(file_get_contents($fileName));

            $jigsaw->writeSourceFile(sprintf('docs/providers/%s.md', $provider), $this->withHeader($file, $provider));
        }
    }

    protected function withHeader(string $content, string $title, string $description = ''): string
    {
        $headerTemplate = '---
title: %s
description: %s
extends: _layouts.documentation
section: content
---
%s';

        return sprintf($headerTemplate, $title, $description, $content);
    }
}

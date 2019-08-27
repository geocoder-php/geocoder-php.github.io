<?php
declare(strict_types=1);

namespace App\Extend;

use GuzzleHttp\Client;
use Illuminate\Support\Str;

class GithubEmojiReplacer
{
    const EMOJI_CODE_REGEX =  '/\:([a-zA-Z0-9-_+]+)\:/';

    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function replace(string $content): string
    {
        $emojis = $this->getGithubEmojis();

        return preg_replace_callback(
           self::EMOJI_CODE_REGEX,
            function (array $matches) use ($emojis) {
                return $this->getEmojiHtml($emojis, $matches[1]) ?? $matches[0];
            },
            $content
        );
    }

    private function getEmojiHtml(array $emojis, string $code)
    {
        if (!isset($emojis[$code])) {
            return null;
        }

        return sprintf('<img class="gh-emoji" src="%s">', $emojis[$code]);
    }

    private function getGithubEmojis(): array
    {
        $cachePath = __DIR__ . '/../.cache/gh-emoji.json';

        if (file_exists($cachePath)) {
            return json_decode(file_get_contents($cachePath), true);
        }

        $response = $this->client->get('https://api.github.com/emojis');
        $responseJson = (string) $response->getBody();

        file_put_contents($cachePath, $responseJson);

        return \GuzzleHttp\json_decode($responseJson, true);
    }


}

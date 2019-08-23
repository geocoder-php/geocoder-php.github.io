<?php
declare(strict_types=1);

namespace App\Extend;

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;

class UpdateProviderNavigation
{
    public function handle(Jigsaw $jigsaw)
    {
        $providers = collect(scandir(__DIR__ . '/../source/docs/providers/'))
            ->filter(function ($fileName) {
                return Str::endsWith($fileName, '.md');
            })
            ->mapWithKeys(function ($fileName) {
                $providerName = Str::replaceLast('.md', '', $fileName);
                return [$providerName => 'docs/providers/' . $providerName];
            });

        $jigsaw->setConfig('navigation.Providers.children', $providers);
    }
}

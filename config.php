<?php

use Illuminate\Support\Str;

$repoUrl = 'https://github.com/geocoder-php/Geocoder';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Geocoder PHP',
    'siteDescription' => 'The most featured Geocoder library written in PHP',
    'repoUrl' => $repoUrl,

    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];

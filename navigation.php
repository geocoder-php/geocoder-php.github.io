<?php

return [
    'Home' => [
        'url' => '/',
        'mobile' => true,
    ],
    'Github' => [
        'url' => $repoUrl,
        'mobile' => true,
    ],
    'Documentation' => [
        'url' => 'docs',
        'children' => [
            'Installation' => 'docs#installation',
            'Cookbook' => 'docs#cookbook',
            'Usage' => 'docs#usage',
            'Provider List' => 'docs#providers',
            'Special Geocoders and Providers' => 'docs#special-geocoders-and-providers',
            'Dumpers' => 'docs#dumpers',
            'Formatters' => 'docs#formatters',
            'Versioning' => 'docs#versioning',
        ],
    ],
    'Providers' => [
        'url' => 'docs#providers',
    ],
    'Branding' => [
        'url' => 'docs/branding',
    ],
];

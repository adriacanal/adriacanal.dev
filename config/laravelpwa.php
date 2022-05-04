<?php

return [
    'name' => 'Adrià Canal',
    'manifest' => [
        'name' => env('APP_NAME', 'Adrià Canal\'s Personal Website'),
        'short_name' => 'AC',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#ffffff',
        'display' => 'browser',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '256x256' => [
                'path' => '/images/icons/icon-256x256.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any maskable'
            ],
        ],
        'shortcuts' => [],
        'custom' => []
    ]
];

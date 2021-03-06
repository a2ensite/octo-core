<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Config
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'navigation' => [
        'sidebar' =>  [
            [
                'label' => 'Dashboard',
                'route' => 'dashboard',
                'icon' => 'zondicon-dashboard',
            ],
            [
                'icon' => 'heroicon-o-user',
                'label' => 'Profile',
                'route' => 'profile.show'
            ],
            [
                'icon' => 'heroicon-o-key',
                'label' => 'API Tokens',
                'route' => 'api-tokens.index'
            ]
        ]
    ],

    'network' => [
        'facebook' => '#',
        'instagram' => '#',
        'youtube' => '#',
    ],

    'footer' => [
        'tagline' => "Copyright © " . date('Y') . " " . config('app.name')
    ],

    'plugins' => [
        'subscribe' => [
            'headline' => 'Something new is coming!',
            'tagline' => 'This application is on for testers. But you can test too. If you want to receive updates join our newsletter.'
        ]
    ]
];

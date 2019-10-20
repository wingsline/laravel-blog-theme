<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Site metadata
    |--------------------------------------------------------------------------
    |
    | These configurations are used to generate meta tags.
    | View file: views/layouts/partials/seo.blade.php
    |
    */
    'meta' => [
        // <meta name="description">
        'description' => 'Arpad Olasz is a Laravel enthusiast and PHP developer.',
        // <meta property="og:image">
        'image' => asset('images/logo.png'),
        // twitter:creator, twitter:site
        'twitter' => [
            'creator' => '@arpadolasz',
            'site' => '@arpadolasz',
        ],
        // <script type='application/ld+json'>
        'jsonld' => [
            // website alternate name
            'alternateName' => 'A blog about everything...',
            // Person sameAs
            'sameAs' => ['https://twitter.com/arpadolasz'],
            // Person name
            'name' => 'Arpad Olasz'
        ]
    ]
];

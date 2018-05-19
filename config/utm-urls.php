<?php

return [
    /*
     * Determine if the UTM URLs middleware should be enabled.
     */
    'enabled' => env('UTM_URLS_ENABLED', true),

    /*
     * These hosts will be skipped
     */
    'skipped_hosts' => [
        'laravel.com',
    ],

    /*
     * These values will be added to all links
     */
    'utms' => [
        'source' => 'utm-urls',
        'medium' => 'web',
        'term' => 'laravel-utm-urls',
        'content' => '',
        'campagne' => 'laravel-utm-urls',
    ],
];

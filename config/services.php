<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_CALLBACK'),
    ],

   

    'facebook' => [
        'client_id' => '672937120128916',
        'client_secret' => '635a7ef69ffa6f6c61430ffd71358ca8',
        'redirect' => 'https://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '941399147259-uf4a34f7mer3ucqm6fk7qfd6ufr9d3ep.apps.googleusercontent.com',
        'client_secret' => 'kg9nDgcQPfx7fpIEpKGkVrHm',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'twitter' => [
        'client_id' => 'dBMKp786qSyXTKWWUb1AuGgpc',
        'client_secret' => 'Isiul1IW7soPuSWUunXozrZfkeMqQhE5mVlRZbQOSf6yRatOnl',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],
    'stripe' => [
    
        'secret'  => 'sk_test_KgWGfjYK5D44EOt5kY98tpb400yZi3LTh2',
    ],
];

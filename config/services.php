<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    //
    // 'mailgun' => [
    //     'domain' => env('MAILGUN_DOMAIN'),
    //     'secret' => env('MAILGUN_SECRET'),
    // ],
    //
    // 'mandrill' => [
    //     'secret' => env('MANDRILL_SECRET'),
    // ],
    //
    // 'ses' => [
    //     'key'    => env('SES_KEY'),
    //     'secret' => env('SES_SECRET'),
    //     'region' => 'us-east-1',
    // ],
    //
    // 'stripe' => [
    //     'model'  => App\User::class,
    //     'key'    => env('STRIPE_KEY'),
    //     'secret' => env('STRIPE_SECRET'),
    // ],

    // Groove HQ client API key
    'groove' => [
        'key' => '3824186ccf722046188f1509ea99eb1bc3f3401f0f893f025df0865796d1a4ab',
        'ratelimit' => 100
    ],

    // HelpScout client API key
    'helpscout' => [
        'key' => 'a93cf8bde37b147ae5dc791d6dab0653c4ae2a78', //'e62cd40446a79e26b0fb6daa7f471cd9cf629ac7',
        'ratelimit' => 200,
        'default_mailbox' => 'support@taxjar.com',
        'default_user_id' => 192305 //190987 // REPLACE ME: this user ID will be used to auto-generate notes in the case attachment uploads fail
    ]

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => env('403705183722530'),         // Your facebook Client ID
    'client_secret' => env('b3af350a7a6e84b8c588ad016d81c699'), // Your facebook Client Secret
    'redirect' => 'http://localhost/login/facebook/callback',
    ],

    'google' => [
    'client_id' => env('18983932808-beadhhdvfkufhe73e7i7jchgfgriauh3.apps.googleusercontent.com'),         // Your googel Client ID
    'client_secret' => env('Ko5xGfL5u6N9605Nfl3HY3Fa'), // Your google Client Secret
    'redirect' => 'http://localhost/final/public/login/googel/callback',
    ],

];

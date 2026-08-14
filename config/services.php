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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel'              => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
    | Deadline ISO-8601 for the Sistemas landing countdown.
    | Example: 2026-08-13T23:59:59-06:00
    | If empty, the frontend falls back to 48 hours from page load.
    */
    'countdown_deadline' => env('COUNTDOWN_DEADLINE'),

    /*
    | Web3Forms access key for the home contact form (#contacto).
    | Env var name kept as api_key_form (project convention).
    */
    'web3forms' => [
        'key' => trim((string) env('api_key_form', '')),
    ],

];

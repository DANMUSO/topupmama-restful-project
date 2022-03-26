<?php

return [
    'api' => [
        'key' => env('SENDGRID_API_KEY'),
        'sender' => [
            'email' => env('SENDGRID_SENDER_EMAIL'),
            'name' => env('SENDGRID_SENDER_NAME'),
        ]
    ],
    'webhook' => [
        'event' => [
            'public_key' => env('SENDGRID_WEBHOOK_EVENT_PUBLIC_KEY')
        ]
    ]
];

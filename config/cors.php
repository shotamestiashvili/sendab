<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

//    'paths' => ['api/*', 'sanctum/csrf-cookie'],



    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

    'allow_methods' => [
        'POST',
        'GET',
        'OPTIONS',
        'PUT',
        'PATCH',
        'DELETE',
    ],

    'allow_headers' => [
        '*'
//        'Content-Type',
//        'X-Auth-Token',
//        'Origin',
//        'Authorization',
//        'Set-Cookie'

    ],

    'paths' => [
        'api/*',
        'login',
        'logout',
        'register',
        'user/password',
        'forgot-password',
        'reset-password',
        'sanctum/csrf-cookie',
        'user/profile-information',
        'email/verification-notification',
    ],

];

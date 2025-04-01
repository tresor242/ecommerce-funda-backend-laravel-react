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


    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // Méthodes HTTP autorisées

    'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:3000',], // Domaines autorisés

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // En-têtes HTTP autorisés

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, 
];


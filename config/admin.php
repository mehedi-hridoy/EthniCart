<?php

return [
    'username' => env('ADMIN_USERNAME'),
    'password_hash' => env('ADMIN_PASSWORD_HASH'),
    // Tokens for securing admin setup and login routes
    'setup_token' => env('ADMIN_SETUP_TOKEN'),
    'login_token' => env('ADMIN_LOGIN_TOKEN'),
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database Id and token.
    |--------------------------------------------------------------------------
    |
    | Here where you can define your database ID and recombee token.
    |
    */

    'database' => 'appxilon-dev',
    'token'    => 'KSd9c65yjebM8pxJwrTmL2WPhxCI9Fwq3vOVwHF0EIAe1yXTonlmThDYMufg4XTF',

    /*
    |--------------------------------------------------------------------------
    | Recombee Timeout.
    |--------------------------------------------------------------------------
    |
    | Here where you can define recombee response timeout in milliseconds.
    |
    */

    'timeout'  => 2000,

    /*
    |--------------------------------------------------------------------------
    | Default protocol for sending requests.
    |--------------------------------------------------------------------------
    |
    | Here where you can define the default protocol for sending requests.
    |
    */

    'protocol' => 'http',

    /*
    |--------------------------------------------------------------------------
    | Default models for user and item.
    |--------------------------------------------------------------------------
    |
    | Here where you can define the default class for user and item.
    |
    */

    'user'     => app(\App\Models\User::class),
    'item'     => app(\App\Models\OrderProduct::class),
];
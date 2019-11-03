<?php


class Config
{
    static $debug = 1;

    static $databases = [
        'dev' => [
            'host' => '127.0.0.1',
            'dbname' => 'cedric@blog',
            'user' => 'root',
            'password' => ''
        ],

        'production' => [
            'host' => '',
            'dbname' => '',
            'user' => '',
            'password' => ''
        ]
    ];


}

include 'web.php';
<?php
return [
    \Phrest\Config::DEPENDENCIES => [
        'factories' => [
            \Monolog\Handler\StreamHandler::class.'::data/debug.log' => function() {
                return new \Monolog\Handler\StreamHandler('data/debug.log', \Monolog\Logger::DEBUG);
            },
            \Monolog\Handler\ChromePHPHandler::class => function() {
                return new \Monolog\Handler\ChromePHPHandler(\Monolog\Logger::DEBUG);
            },
        ]
    ],

    \Phrest\Config::MONOLOG_HANDLER => [
        \Monolog\Handler\StreamHandler::class.'::data/debug.log',
        \Monolog\Handler\ChromePHPHandler::class
    ]
];
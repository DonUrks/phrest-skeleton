<?php
return [
    \Phrest\Config::DEPENDENCIES => [
        'factories' => [
            \Application\Action\Test::class => function(\Interop\Container\ContainerInterface $container) {
                return new \Application\Action\Test(
                    $container->get(\Phrest\Config::LOGGER),
                    $container->get(\Phrest\Config::REQUEST_BODY_VALIDATOR),
                    $container->get(\Phrest\Config::HATEOAS_RESPONSE_GENERATOR)
                );
            }
        ]
    ],
    \Phrest\Config::ROUTES => [
        'index' => [
            'path' => '/',
            'action' => \Application\Action\Test::class
        ],
        'swagger' => [
            'path' => '/api/swagger',
            'action' => \Phrest\Config::ACTION_SWAGGER
        ]
    ],
];

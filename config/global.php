<?php
return [
    // directory conatain swagger, hateoas annotations
    \Phrest\Application::CONFIG_SWAGGER_SCAN_DIRECTORY => 'src',

    // enable, disable cache
    \Phrest\Application::CONFIG_ENABLE_CACHE => false,

    // phrest cache dir
    \Phrest\Application::CONFIG_CACHE_DIRECTORY => 'cache/phrest',

    // inject Messages-Action
    \Phrest\Application::CONFIG_DEPENDENCIES => [
        'factories' => [
            \Api\Action\Messages::class => function(\Interop\Container\ContainerInterface $container) {
                return new \Api\Action\Messages();
            },
        ]
    ],

    // inject routes
    \Phrest\Application::CONFIG_ROUTES => [
        //create route for swagger - no explicit action required
        'swagger' => \Phrest\Application::createRoute(
            '/swagger',
            \Phrest\Application::ACTION_SWAGGER
        ),
        //create route for swagger - no explicit action required
        'errors' => \Phrest\Application::createRoute(
            '/errors',
            \Phrest\Application::ACTION_ERROR_CODES
        ),
        //create route for messages
        'messages' => \Phrest\Application::createRoute(
            '/messages/{id}',
            \Api\Action\Messages::class
        ),
    ],
];

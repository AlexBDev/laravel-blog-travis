<?php

return [

    // Tasks
    //
    // Here you can define in the `before` and `after` array, Tasks to execute
    // before or after the core Rocketeer Tasks. You can either put a simple command,
    // a closure which receives a $task object, or the name of a class extending
    // the Rocketeer\Abstracts\AbstractTask class
    //
    // In the `custom` array you can list custom Tasks classes to be added
    // to Rocketeer. Those will then be available in the command line
    // with all the other tasks
    //////////////////////////////////////////////////////////////////////

    // Tasks to execute before the core Rocketeer Tasks
    'before' => [
        'setup'   => [],
        'deploy'  => [],
        'cleanup' => [],
        'dependencies' => [
            'source ./user-permission.sh && export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose up -d --force-recreate --build',
            'export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose exec -T mysql mysql -u root -proot -e \'CREATE DATABASE blog;\'',
        ],
    ],

    // Tasks to execute after the core Rocketeer Tasks
    'after'  => [
        'setup'   => [],
        'deploy'  => [],
        'cleanup' => [],
        'dependencies' => [
            'cp app/.env.example app/.env',
            'export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose exec -T php php artisan migrate --force',
        ]
    ],

    // Custom Tasks to register with Rocketeer
    'custom' => [],

];

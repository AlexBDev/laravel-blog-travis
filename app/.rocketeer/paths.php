<?php

return [

    // Configurable paths
    //
    // Here you can manually set paths to some commands Rocketeer
    // might try to use, if you leave those empty it will try to find them
    // manually or assume they're in the root folder
    //
    // You can also add in this file custom paths for any command or binary
    // Rocketeer might go looking for
    ////////////////////////////////////////////////////////////////////

    // Path to the PHP binary
    'php'      => 'export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose exec -T php php',

    // Path to Composer
    'composer' => 'export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose exec -T php composer',

    // Path to the Artisan CLI
    'artisan'  => 'export COMPOSE_PROJECT_NAME=laravel_blog && docker-compose exec -T php artisan',

];

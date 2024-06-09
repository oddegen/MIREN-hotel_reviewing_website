<?php

use Core\App;
use Core\Container;
use Core\Database;

include base_path("Core/Container.php");
include base_path("Core/App.php");


$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database'], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"]);
});

App::setContainer($container);
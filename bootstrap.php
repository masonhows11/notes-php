<?php

use core\App;
use core\Container;
use core\Database;

$container = new Container();


$container->bind('core\Database', function () {

    $config = require base_path('config.php');
    return new Database($config['database']);

});


// 1  use this
// $db = $container->resolve('core\Database');


// for use container
// means database class connection in
// container

// 2 or use this
App::setContainer($container);
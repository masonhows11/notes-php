<?php

// get our root project path
const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class) {


    dd($class);
    
    // require base_path("core/" . $class . '.php'); 
    // require base_path("core/{$class}.php");


    // core/Database

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    require base_path("{$class}.php");
});

// require base_path('Database.php');

// require base_path('Response.php');

require base_path('core/router.php');
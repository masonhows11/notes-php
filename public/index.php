<?php

// get our root project path
use Core\Router;

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class) {


    // in below code result
    // is namespace for loaded class  
    //  dd($class);

    // like Core\Database
    // namespace name and directory name
    // must be same 

    // require base_path("core/" . $class . '.php'); 
    // require base_path("core/{$class}.php");

    // Core/Database

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

// require base_path('Database.php');
// require base_path('Response.php');
// require base_path('core/router.php');


//// new route system ////

// create new instance from Router class
$router = new Router();

// load routes file
$routes = require base_path('routes.php');

// separate url from query string
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);
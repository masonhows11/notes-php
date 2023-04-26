<?php

// $routes = require base_path('routes.php');


// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {

//         require base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($code = 404)
// {
//     http_response_code($code);
//     require base_path("views/{$code}.php");
//     die();
// }

// routeToController($uri, $routes);


class Router
{


    public function get($uri,$controller)
    {
    }


    public function post()
    {
    }


    public function delete(){

    }

    public function patch(){

    }


    public function put(){
        
    }
    
}
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


    
    protected $routes = [];

    public function get($uri,$controller)
    {
        $this->routes[] = [
          'uri' => $uri,
          'controller' => $controller,
          'method'  => 'GET'
        ];
    }


    public function post($uri,$controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method'  => 'POST'
        ];
    }


    public function delete($uri,$controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method'  => 'DELETE'
        ];
    }

    public function patch($uri,$controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method'  => 'PATCH'
        ];
    }


    public function put($uri,$controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method'  => 'PUT'
        ];
    }
    
}
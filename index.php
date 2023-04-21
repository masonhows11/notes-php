<?php
//  if ($uri == '/') {
//
//    require 'controllers/home.php';
//
//  } else if ($uri == '/about') {
//
//    require 'controllers/about.php';
//
//  } else if ($uri == '/contact') {
//
//    require 'controllers/contact.php';
//  }

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    require  'views/404.view.php';

    //    echo 'Sorry not found';
    //    die();
}
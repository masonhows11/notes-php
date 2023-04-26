<?php


// old route system //

// return [
//     '/' => 'controllers/home.php',
//     '/posts' => 'controllers/posts/index.php',
//     '/post' => 'controllers/posts/show.php',
//     '/post/create' => 'controllers/posts/create.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php'
// ];


// new route system //

$router->get('/','controllers/home.php');
$router->get('/about','controllers/about.php');
$router->get('/contact','controllers/contact.php');

$router->get('/posts','controllers/posts/index.php');
$router->get('/post','controllers/posts/show.php');
$router->delete('/post','controllers/posts/destroy.php');

$router->get('/post/create','controllers/posts/create.php');
$router->post('/post/store','controllers/posts/store.php');
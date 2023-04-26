<?php

// return [
//     '/' => 'controllers/home.php',

//     '/posts' => 'controllers/posts/index.php',
//     '/post' => 'controllers/posts/show.php',
//     '/post/create' => 'controllers/posts/create.php',

//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php'
// ];

$router->get('/','controllers/index.php');

$router->delete('/posts','controllers/posts/destroy.php');
<?php

//  if ($_SERVER['REQUEST_URI'] == '/') {
//    echo "active";
//  } else {
//    echo " ";
//  }
//  echo $_SERVER['REQUEST_URI'] === '/' ? 'active' : '';

// show current uri
// echo $_SERVER['REQUEST_URI'];

//    echo "<pre>";
//    var_dump($_SERVER);
//    echo "</pre>";


// dd stand for var_dump & die functions
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    
    require base_path('views/' . $path);
}
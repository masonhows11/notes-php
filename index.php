<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {

    require 'controllers/index.php';

} elseif ($uri === '/about.php') {

    require 'controllers/about.php';

} elseif ($uri === '/contact.php') {

    require 'controllers/contact.php';
}
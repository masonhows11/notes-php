<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {

    require 'controllers/home.php';

} else if ($uri == '/about') {

    require 'controllers/about.php';

} else if ($uri == '/contact') {

    require 'controllers/contact.php';
}
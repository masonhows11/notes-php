<?php
require 'database.php';
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My Posts';

$posts = $db->query('select * from posts')->fetchAll();

require "views/posts.view.php";
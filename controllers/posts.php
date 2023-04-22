<?php
require 'database.php';
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'posts';

$posts = $db->query('select * from posts')->fetchAll();



require "views/posts.view.php";
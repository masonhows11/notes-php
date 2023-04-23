<?php

$config = require('config.php');
$db = new database($config['database']);

$heading = 'Create post';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$db->query('insert into posts(title,description,user_id) values (:title,:description,:user_id)',[
    'title' => $_POST['title'], 'description' => $_POST['description'] , 'user_id' => 10,
    ]);
}

require "views/post-create.view.php";
<?php


use core\Database;



$config = require base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query('select * from posts')->all();





view("posts/index.view.php", [
    'heading' => 'My Posts',
    'posts' => $posts
]);
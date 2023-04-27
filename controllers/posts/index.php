<?php


use core\App;
use core\Database;



$db = App::resolve(Database::class);

$posts = $db->query('select * from posts')->all();





view("posts/index.view.php", [
    'heading' => 'My Posts',
    'posts' => $posts
]);
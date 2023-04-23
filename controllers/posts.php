<?php



$heading = 'My Posts';

try {
    $config = require('config.php');
    $db = new Database($config['database']);

    $posts = $db->query('select * from posts')->all();
}catch (\Exception $exception){
    echo $exception->getMessage();
}


require "views/posts.view.php";
<?php

use core\database;


$config = require base_path('config.php');
$db = new Database($config['database']);
$post = $db->query('select * from posts where id = :id ', ['id' => $_GET['id']])->findOrFail();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query('delete from posts where id = :id', [
        'id' => $_GET['id']
    ]);
    header('location: /posts');
    exit();

} else {
    // if ($post['user_id'] !== 7) {
    //     abort(Response::FORBIDDEN);
    // }
    view("posts/show.view.php", [
        'heading' => 'My Post',
        'post' => $post
    ]);
}


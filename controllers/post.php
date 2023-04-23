<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My Post';

$post = $db->query('select * from posts where id = :id ', ['id' => $_GET['id']])->findOrFail();



if ($post['user_id'] !== 10) {
    abort(Response::FORBIDDEN);
}

require "views/post.view.php";
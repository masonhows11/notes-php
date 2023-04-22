<?php
require 'database.php';
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My Post';

$post = $db->query('select * from posts where id = :id ', ['id' => $_GET['id']])->fetch();

if (!$post) {
    abort();
}

if ($post['user_id'] !== 7) {
    abort(403);
}

require "views/post.view.php";
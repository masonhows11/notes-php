<?php

$config = require('config.php');
$db = new database($config['database']);

$heading = 'Create post';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen($_POST['title']) == 0 && strlen($_POST['body']) == 0) {
        $errors['title'] = 'title is required';
        $errors['body'] = 'body is required';
    }

    if (empty($errors)) {
        $db->query('insert into posts(title,body,user_id) values (:title,:body,:user_id)', [
            'title' => $_POST['title'], 'body' => $_POST['body'], 'user_id' => 10,
        ]);
        header("location:http://notes.test/posts");
    }


}

require "views/post-create.view.php";
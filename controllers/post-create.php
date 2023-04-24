<?php


require 'services/Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create post';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors_title = [];
    $errors_body = [];
   

    $validator = new Validator();

    if ($validator->string($_POST['title']) && $validator->string($_POST['body'])) {
        $errors_title['title'] = 'title is required';
        $errors_body['body'] = 'body is required';
    }

    // dd($_POST['body']);
   /* if (empty($_POST['title']) && empty($_POST['body'])) {
        $errors_title['title'] = 'title is required';
        $errors_body['body'] = 'body is required';
    }

    if (strlen($_POST['body']) > 10) {
        $errors_body['body'] = 'maximum characters is 10';
    }*/

    if (empty($errors_title) && empty($errors_body)) {
        $db->query('insert into posts(title,body,user_id) values (:title,:body,:user_id)', [
            'title' => $_POST['title'], 'body' => $_POST['body'], 'user_id' => 10,
        ]);
        header("location:http://notes.test/posts");
    }


}

require "views/post-create.view.php";
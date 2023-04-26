<?php


use Core\Database;

require base_path("core/".'Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors_title = [];
$errors_body = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    if (!Validator::string($_POST['title'], 1, 10)) {

        $errors_title['title'] = 'title is required & between 1 & 10 characters';
    }

    if (!Validator::string($_POST['body'], 1, 10)) {

        $errors_body['body'] = 'body is required & between 1 & 10 characters';
    }


    if (empty($errors_title) && empty($errors_body)) {
        $db->query('insert into posts(title,body,user_id) values (:title,:body,:user_id)', [
            'title' => $_POST['title'], 'body' => $_POST['body'], 'user_id' => 10,
        ]);
        header("location:http://notes.test/posts");
    }
}

view("posts/create.view.php", [

    'heading' => 'Create post',
    'errors_title' => $errors_title,
    'errors_body' => $errors_body

]);
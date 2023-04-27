<?php

use core\App;
use core\Validator;
use core\Database;

//require base_path("core/".'Validator.php');

$db = App::resolve(Database::class);

$errors_title = [];
$errors_body = [];

if (!Validator::string($_POST['title'], 1, 30)) {
    $errors_title['title'] = 'title is required & between 1 & 30 characters';
}

if (!Validator::string($_POST['body'], 1, 30)) {
    $errors_body['body'] = 'body is required & between 1 & 30 characters';
}

if(! empty($errors_title)){

   return view("posts/create.view.php", [
        'heading' => 'Create post',
        'errors_title' => $errors_title,
        'errors_body' => $errors_body

    ]);
}

if(! empty($errors_body)){

    return view("posts/create.view.php", [
        'heading' => 'Create post',
        'errors_title' => $errors_title,
        'errors_body' => $errors_body

    ]);
}

if (empty($errors_title) && empty($errors_body)) {
    $db->query('insert into posts(title,body,user_id) values (:title,:body,:user_id)', [
        'title' => $_POST['title'], 'body' => $_POST['body'], 'user_id' => 10,
    ]);
    header("location: /posts");
    die();
}


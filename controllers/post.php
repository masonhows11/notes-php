<?php
require 'database.php';
$config = require('config.php');

$db = new Database($config['database']);

$heading = 'My Post';

$post = $db->query('select * from posts where id = :id ', ['id' =>  $_GET['id']])->fetch();

require "views/post.view.php";
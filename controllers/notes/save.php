<?php

use Core\DataBase;

$config = require basePath('config.php');
$db = new DataBase($config['dataBase'], $config['credentials']['userName'], $config['credentials']['password']);

$heading = "Create Note";

$errors = [];
if (strlen($_POST["body"]) === 0) {
    $errors['body'] = 'A body is required';
}
if (!empty($errors)) {
    return require views('notes/create.view.php');
}
$params = [
    'body' => $_POST["body"],
    'user_id' => 1
];
$db->save('notes', $params);
header('location: ' . Url('/notes'));
exit;

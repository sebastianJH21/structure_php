<?php

use Core\DataBase;

$db = new DataBase;
$heading = 'Login';
$email = $_POST['email'];
$password = $_POST['password'];

$errors = []; // Create conditions to validate and add into the errors array

$user = $db->queryReturnArray('SELECT * FROM users WHERE email = :email', ['email' => $email]);
// dd($user);
if (empty($user)) {
    $errors['email'] = 'This user don´t exist';
    require views('session/create.view.php');
    exit;
}
if ($password === $user[0]['password']) {
    $_SESSION['user'] = [
        'email' => $email
    ];
    session_regenerate_id(true);
    header('location: ' . Url('/'));
    exit;
}
$errors['email'] = 'This password not matching whit the email';
require views('session/create.view.php');
    


<?php 
use Core\DataBase;
$db = new DataBase;

$email = $_POST['email'];
$password = $_POST['password']; 

$errors = []; // Create conditions to validate and add into the errors array

$user = $db->queryReturnBoolean('SELECT * FROM users WHERE email = :email', ['email' => $email]);

if($user) {
    $errors['email'] = 'This email is already exist';
    header('location: ' . Url('/'));
    exit;
    
}else{
    $params = [
        'email' => $email,
        'password' => $password
    ];
    $db->save('users', $params);

    $_SESSION['user'] = [
        'email' => $email
    ];
    header('location: ' . Url('/'));
    exit;
}


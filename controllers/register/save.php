<?php 
use Core\DataBase;
$db = new DataBase;
$heading = "Register";
$email = $_POST['email'];
$password = $_POST['password']; 

$errors = []; // Create conditions to validate and add into the errors array

$user = $db->queryReturnBoolean('SELECT * FROM users WHERE email = :email', ['email' => $email]);

if($user) {
    $errors['email'] = 'This email is already exist';
    require views('register/create.view.php');
    // header('location: ' . Url('/login'));
    
    
}else{
    $params = [
        'email' => $email,
        'password' => $password
    ];
    $db->save('users', $params);

    // $_SESSION['user'] = [
    //     'email' => $email
    // ];
    header('location: ' . Url('/login'));
    exit;
}


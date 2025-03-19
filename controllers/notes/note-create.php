<?php 
$config = require basePath('config.php');
$db = new DataBase($config['dataBase'], $config['credentials']['userName'], $config['credentials']['password']);

$heading = "Create Note";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $errors = [];
    if(strlen($_POST["body"]) === 0){
        $errors['body'] = 'A body is required';
    }
    
    if(!empty($errors)){
        $params = [
            'body' => $_POST["body"],
            'user_id' => 1
        ];
        $db->save('notes', $params);
    }
}
require views('notes/note-create.view.php');
?>
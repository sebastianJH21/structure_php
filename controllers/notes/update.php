<?php 
use Core\DataBase;
$db = new DataBase;
$currentUserId = 1;
$params = [
    'id' =>  $_GET["id"]
];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);

if (strlen($_POST["body"]) === 0) {
    $errors['body'] = 'A body is required';
}
if (!empty($errors)) {
    return require views('notes/edit.view.php');
}
authorize($note[0]['user_id'] === $currentUserId); //Validate if user is authorized to delete the note

$params = [
    'body' => $_POST["body"],
    'user_id' => 1
];
$db->edit('notes', $params, $_GET["id"]);

header('Location: '.BASE_URL.'/notes');
exit();       

<?php
use Core\DataBase;
$db = new DataBase;

$currentUserId = 1; //Get id from curruent User for valitade the permissions
$heading = "Note";
$params = [
    'id' =>  $_POST["id"]
];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);

authorize($note[0]['user_id'] === $currentUserId); //Validate if user is authorized to delete the note

$db->delete('notes', $_POST["id"]);

header('location: ' . Url('/notes'));
exit;

require views('notes/note.view.php');

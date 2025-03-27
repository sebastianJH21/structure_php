<?php
use Core\DataBase;
$db = new DataBase;

$currentUserId = 1; //Get id from curruent User for valitade the permissions
$heading = "Note";
$params = [
    'id' =>  $_GET["id"]
];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    authorize($note[0]['user_id'] === $currentUserId); //Validate if user is authorized to delete the note
    
    $db->delete('notes', $_POST["id"]);
    
    header('location: ' . Url('/notes'));
    exit;
} else {
    if (!$note) {
        abort(404);
    }

    authorize($note[0]['user_id'] === $currentUserId); //Validate if user is authorized to view the note
    require views('notes/note.view.php');
}

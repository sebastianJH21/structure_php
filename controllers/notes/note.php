<?php 
$config = require basePath('config.php');
$db = new DataBase($config['dataBase'], $config['credentials']['userName'], $config['credentials']['password']);

$heading = "Note";
$currentUserId = 1;
$params = [
    'id' =>  $_GET["id"]
];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);
if (!$note) {
    abort(404);
}
if($note[0]['user_id'] !== $currentUserId){
    abort(403);
}
require views('notes/note.view.php');

?>
<?php 
use Core\DataBase;
$db = new DataBase;
$heading = 'Edit note';  
$params = [
    'id' =>  $_GET["id"]
];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);
require views('notes/edit.view.php');

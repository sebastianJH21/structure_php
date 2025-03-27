<?php 
use Core\DataBase;
$db = new DataBase;

$heading = "My Notes";
$notes = $db->get('notes');
require views('notes/notes.view.php');

?>
<?php 
$config = require('config.php');
$db = new DataBase($config['dataBase'], $config['credentials']['userName'], $config['credentials']['password']);
$heading = "My Notes";
$notes = $db->get('notes');
require 'views/notes.view.php';

?>
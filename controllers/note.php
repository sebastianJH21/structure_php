<?php 
$config = require('config.php');
$db = new DataBase($config['dataBase'], $config['credentials']['userName'], $config['credentials']['password']);
$heading = "Note";
$params = ['id' =>  $_GET["id"]];
$note = $db->queryReturnArray("SELECT * FROM notes WHERE id=:id", $params);
require 'views/note.view.php';

?>
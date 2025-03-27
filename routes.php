<?php 

// return [
//     BASE_URL.'/' => "controllers/index.php",
//     BASE_URL.'/about' => "controllers/about.php",
//     BASE_URL.'/contact' => "controllers/contact.php",
//     BASE_URL.'/notes' => "controllers/notes/notes.php",
//     BASE_URL.'/notes/create' => "controllers/notes/create.php",
//     BASE_URL.'/note' => "controllers/notes/note.php"
// ];


$router->get(BASE_URL.'/', "controllers/index.php");
$router->get(BASE_URL.'/about', "controllers/about.php");
$router->get(BASE_URL.'/contact', "controllers/contact.php");

$router->get(BASE_URL.'/notes', "controllers/notes/notes.php");
$router->get(BASE_URL.'/note', "controllers/notes/note.php");
$router->delete(BASE_URL.'/note', "controllers/notes/delete.php");
$router->get(BASE_URL.'/notes/create', "controllers/notes/create.php");
$router->post(BASE_URL.'/notes/create', "controllers/notes/save.php");
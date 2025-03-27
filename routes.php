<?php 
//Navegation
$router->get(BASE_URL.'/', "controllers/index.php");
$router->get(BASE_URL.'/about', "controllers/about.php");
$router->get(BASE_URL.'/contact', "controllers/contact.php");
// Show notes
$router->get(BASE_URL.'/notes', "controllers/notes/notes.php");
$router->get(BASE_URL.'/note', "controllers/notes/note.php");
//Delete note
$router->delete(BASE_URL.'/note', "controllers/notes/delete.php");
//Create and save note
$router->get(BASE_URL.'/note/create', "controllers/notes/create.php");
$router->post(BASE_URL.'/note/create', "controllers/notes/save.php");
//Edit note
$router->get(BASE_URL.'/note/edit', "controllers/notes/edit.php");
$router->patch(BASE_URL.'/note/edit', "controllers/notes/update.php");
//Login
$router->get(BASE_URL.'/register', "controllers/register/create.php");
$router->post(BASE_URL.'/register', "controllers/register/save.php");
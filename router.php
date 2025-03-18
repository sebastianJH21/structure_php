<?php 

$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/notes' => "controllers/notes.php",
    '/note' => "controllers/note.php"
];
// $routes = [
//     $_SESSION["BASE_URL"] => "controllers/index.php",
//     $_SESSION["BASE_URL"] . "about" => "controllers/tickets.php",
//     $_SESSION["BASE_URL"] . "mistickets" => "controllers/misTickets.php",
//     $_SESSION["BASE_URL"] . "programados" => "controllers/programados.php",
//     $_SESSION["BASE_URL"] . "blank" => "views/blank.php",
//     $_SESSION["BASE_URL"] . "modelAdmin" => "Core/admin.php",
//     $_SESSION["BASE_URL"] . "login" => "login.php",
// ];

if (array_key_exists($uri, $routes)) {
    // require basePath($routes[$uri]);
    require BASE_PATH.$routes[$uri];

} else {
    require 'controllers/404.php';
    die();
    // abort(404);
}
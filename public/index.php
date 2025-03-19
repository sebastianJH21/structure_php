<?php 
const BASE_PATH = __DIR__ . '/../'; // Directorio raíz
require BASE_PATH.'functions.php';
// const BASE_PATH = __DIR__.'/'; // Directorio raíz
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// $_SESSION["BASE_URL"] = explode('public', $_SERVER["PHP_SELF"])[0];
define('BASE_URL',substr(explode('index', $_SERVER["PHP_SELF"])[0], 0, -1));
// define('BASE_URL',explode('public', $_SERVER["PHP_SELF"])[0]);
// define('BASE_URL',substr(explode('public', $_SERVER["PHP_SELF"])[0], 0, -1));
// dd($uri);
// Construir URL base automáticamente
// dd(BASE_URL);
// dd($_SERVER["PHP_SELF"]);
// dd(explode('public', $_SERVER["PHP_SELF"]));
require basePath('DataBase.php');
require basePath('router.php');




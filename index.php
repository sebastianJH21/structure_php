<?php 
require 'functions.php';

// const BASE_PATH = __DIR__ . '/../'; // Directorio raíz
const BASE_PATH = __DIR__.'/'; // Directorio raíz
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$_SESSION["BASE_URL"] = explode('public', $_SERVER["PHP_SELF"])[0];
// Construir URL base automáticamente

require 'DataBase.php';
require 'router.php';




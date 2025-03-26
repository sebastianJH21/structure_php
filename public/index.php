<?php 
const BASE_PATH = __DIR__ . '/../'; // Directorio raíz
require BASE_PATH.'Core/functions.php';
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
define('BASE_URL',substr(explode('public', $_SERVER["PHP_SELF"])[0], 0, -1));
// require basePath('DataBase.php');

spl_autoload_register(function ($class) {
   $resutl = str_replace('\\', DIRECTORY_SEPARATOR, $class);
   require basePath($resutl.'.php');
});

require basePath('Core/router.php');




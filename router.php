<?php 
$routes = require 'routes.php';
if (array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);

} else {
    abort(404);
}
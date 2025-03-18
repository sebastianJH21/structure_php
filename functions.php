<?php
function urlIs($url)
{
    return $_SERVER["REQUEST_URI"] === $url;
}
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
// function basePath($path)
// {
//     return BASE_PATH . $path;
// }
function urlRelative($path)
{
    return $_SESSION["BASE_URL"] . $path;
}
// function abort($code)
// {
//     http_response_code($code);
//     require basePath("views/$code.php");
//     die();
// }

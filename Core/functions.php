<?php
function urlIs($url)
{
    return $_SERVER["REQUEST_URI"] === BASE_URL.$url;
}
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
function basePath($path)
{
    return BASE_PATH . $path;
}
function views($path)
{
    return basePath('views/'.$path);
}

function Url($url)
{
    return BASE_URL . $url;
}
function urlRelative($path)
{
    return $_SESSION["BASE_URL"] . $path;
}
function abort($code)
{
    http_response_code($code);
    require basePath("views/$code.view.php");
    die();
}
function authorize($validate){
    if (!$validate) {
        abort(403);
    }
    return true;
}
function validateLogin(){
    dd($_SESSION['user']);
    if (!isset($_SESSION['user'])) {
        header('location: ' . Url('/login'));
        exit;
    }
}

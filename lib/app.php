<?php
require_once "controllers/error.php";

class App
{
    function __construct()
    {
        $url = $_GET["url"];
        $url = rtrim($url, "/");

        $url = explode("/", $url);

        $controllerFile = 'controllers/' . $url[0] . 'php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $url[0];
        } else {
            $controller = new Error;
        }
    }
}

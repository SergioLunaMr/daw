<?php
//Cargamos los parámetros
include("../app/Config/config.php");
//Preparamos la autocarga de clases
require_once '../vendor/autoload.php';
//Usamos las clases
use App\Controllers\IndexController;
use App\Controllers\BaseController;
use App\Core\Router;

$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'IndexAction']));
$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $router->match($request);
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}
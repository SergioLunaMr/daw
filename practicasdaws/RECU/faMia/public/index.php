<?php
//Preparamos la autocarga de clases
require_once '../vendor/autoload.php';
//Usamos las clases
use App\Controller\IndexController;
use App\Controller\ProductsController;
use App\Core\Router;

if(!isset($_SESSION["auth"])){
    $auth=false;
}

$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'indexAction']));

$router->add(array(
    'name' => 'list',
    'path' => '/^\/(lista)(Pizzas|Bebidas|Postres)$/',
    'action' => [ProductsController::class, 'listarProductosAction']
));

$request =  $_SERVER['REQUEST_URI'];
$route = $router->match($request);
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}
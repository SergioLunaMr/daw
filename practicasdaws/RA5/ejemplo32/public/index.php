<?php
require('../app/Config/config.php');
require('../vendor/autoload.php');

use App\Core\Router;
use App\Controllers\IndexController;

$router = new Router();
$router -> add(array(
    'name'=>'home',
    'path'=>'/^\/$/',
    'action'=>[IndexController::class, 'IndexAction']));
$request=str_replace(DIRBASEURL,'',$_SERVER['REQUEST_URI']);
$router = $router->match($request);
if ($router) {
    $controllerName = $router['action'][0];
    $actionName = $router['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo 'Error 404';
}
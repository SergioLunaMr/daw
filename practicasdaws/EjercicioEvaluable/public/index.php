<?php
// require('../app/Config/config.php');
// require('../vendor/autoload.php');

use App\Core\Router;
use App\Controllers\IndexController;

$router = new Router();
$router -> add(array(
    'name'=>'home',
    'path'=>'/^\/$/',
    'action'=>[IndexController::class, 'IndexAction']));
$request=str_replace(DIRBASEURL,'',$_SERVER['REQUEST_URI']);
$route = $router->match($request);
var_dump($router);
var_dump($request);
if ($route) {
    $controllerName = $route[0]['action'][0];
    $actionName = $route[0]['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo 'Error 404';
}
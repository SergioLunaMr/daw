<?php
require("./config/config.php");
require("./vendor/autoload.php");
use App\Controllers\IndexController;
use App\Core\Router;
$router = new Router();
$router->add(array(
    "name"=>"home",
    "path"=>"/^\/$/",
    "action"=>[IndexController::class,"IndexAction"]));
$request=str_replace(DIRBASEURL, "", $_SERVER["REQUEST_URI"]);
$route= $router->match($request);

if($route){
    $controllerName = $route["action"][0];
    $actionName = $route["action"][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
}
else {
    echo "No ruta";
}



































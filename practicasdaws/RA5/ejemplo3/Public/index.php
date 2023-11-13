<?php
use App\Controllers\NumberController;

require("../App/Config/config.php");
require("../Vendor/autoload.php");
use App\Controllers\IndexController;
use App\Core\Router;

$router = new Router();
$router->add(
    array(
        'name' => "home",
        'path' => '/^\/$/',
        'action' => [IndexController::class, "IndexAction"]
    )
);
$router->add(
    array(
        'name' => "number",
        'path' => '/^\/numeros\/$/',
        'action' => [NumberController::class, "NumberList"]
    )
);

$router->add(
    array(
        'name' => "numberselect",
        'path' => '/^\/numeros\/[0-9]+$/',
        'action' => [NumberController::class, "NumberListSelect"]
    )
);
$request = str_replace(DIRBASEURL, "", $_SERVER["REQUEST_URI"]);
$route = $router->match($request);

if ($route) {
    $controllerName = $route[0]["action"][0];
    $actionName = $route[0]["action"][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No ruta";
}
?>
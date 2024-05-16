<?php
//Preparamos la autocarga de clases
require_once '../vendor/autoload.php';
//Usamos las clases
use Dotenv\Dotenv;
use App\Core\Router;
use App\Controller\AulasController;
use App\Controller\AdminController;


$dotenv= Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();
define('DBHOST', $_ENV['DBHOST']);
define('DBUSER', $_ENV['DBUSER']);
define('DBPASS', $_ENV['DBPASS']);
define('DBNAME', $_ENV['DBNAME']);
define('DBPORT', $_ENV['DBPORT']);

$router = new Router();

$router->add([
    'name'=>'home',
    'path'=>'/^\/$/',
    'action' => [AulasController::class, 'IndexAction']
]);

$router->add([
    'name'=>'addAulaForm',
    'path'=>'/^\/aula\/add\/form$/',
    'action' => [AulasController::class, 'AulaAddFormAction']
]);

$router->add([
    'name'=>'addAula',
    'path'=>'/^\/aula\/add$/',
    'action' => [AulasController::class, 'AulaAddAction']
]);

$router->add([
    'name'=>'editAula',
    'path'=>'/^\/aula\/edit\/[0-9]+$/',
    'action' => [AulasController::class, 'AulaEditAction']
]);

$router->add([
    'name'=>'deleteAula',
    'path'=>'/^\/aula\/delete\/[0-9]+$/',
    'action' => [AdminController::class, 'AulaDeleteAction']
]);

$router->add([
    'name'=>'adminAulas',
    'path'=>'/^\/admin\/aulas$/',
    'action' => [AulasController::class, 'AdminAulasAction']
]);

$request = $_SERVER['REQUEST_URI'];
$route = $router->match($request);
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}
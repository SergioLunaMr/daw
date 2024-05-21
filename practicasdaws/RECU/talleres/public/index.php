<?php
//Preparamos la autocarga de clases
require_once '../vendor/autoload.php';
//Usamos las clases
use App\Controller\IndexController;
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

session_start();
if(!isset($_SESSION["PerfilUsuario"])){
    $_SESSION["PerfilUsuario"]=["Perfil"=>"Invitado", "Nombre"=>"Invitado"];
}

$router = new Router();

$router->add([
    'name'=>'home',
    'path'=>'/^\/$/',
    'action' => [IndexController::class, 'indexAction']
]);

$router->add([
    'name'=>'login',
    'path'=>'/^\/login+/',
    'action' => [IndexController::class, 'loginAction']
]);

$router->add([
    'name'=>'logout',
    'path'=>'/^\/logout$/',
    'action' => [IndexController::class, 'logoutAction']
]);

$router->add([
    'name'=>'admin',
    'path'=>'/^\/admin$/',
    'action' => [IndexController::class, 'adminAction']
]);


$router->add([
    'name'=>'aulaDetails',
    'path'=>'/^\/aula\/details\/[0-9]+$/',
    'action'=> [AulasController::class, 'listAction']
]);


///

$router->add([
    'name'=>'adminAulas',
    'path'=>'/^\/admin\/aulas$/',
    'action' => [AdminController::class, 'aulasAction']
]);

$router->add([
    'name'=>'adminEquipos',
    'path'=>'/^\/admin\/equipos$/',
    'action' => [AdminController::class, 'equiposAction']
]);

$router->add([
    'name'=>'adminGrupos',
    'path'=>'/^\/admin\/grupos$/',
    'action' => [AdminController::class, 'gruposAction']
]);

$router->add([
    'name'=>'adminAlumnos',
    'path'=>'/^\/admin\/alumnos$/',
    'action' => [AdminController::class, 'alumnosAction']
]);

$router->add([
    'name'=>'adminIncidencias',
    'path'=>'/^\/admin\/incidencias$/',
    'action' => [AdminController::class, 'incidenciasAction']
]);

$router->add([
    'name'=>'adminReservas',
    'path'=>'/^\/admin\/reservas$/',
    'action' => [AdminController::class, 'reservasAction']
]);

$router->add([
    'name'=>'adminUbicacions',
    'path'=>'/^\/admin\/ubicaciones$/',
    'action' => [AdminController::class, 'ubicacionesAction']
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
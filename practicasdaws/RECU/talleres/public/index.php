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
    'name'=>'admin',
    'path'=>'/^\/admin$/',
    'action' => [AdminController::class, 'IndexAction']
]);

$router->add([
    'name'=>'adminAulas',
    'path'=>'/^\/admin\/aulas$/',
    'action' => [AulasController::class, 'AdminAulasAction']
]);

$request = $_SERVER['REQUEST_URI'];
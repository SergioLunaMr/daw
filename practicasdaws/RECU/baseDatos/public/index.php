<?php
//Preparamos la autocarga de clases
require_once '../vendor/autoload.php';
//Usamos las clases
use Dotenv\Dotenv;
use App\Model\Productos;
if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
    exit();
}

$dotenv= Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();
define('DBHOST', $_ENV['DBHOST']);
define('DBUSER', $_ENV['DBUSER']);
define('DBPASS', $_ENV['DBPASS']);
define('DBNAME', $_ENV['DBNAME']);
define('DBPORT', $_ENV['DBPORT']);

$productos = Productos::getInstancia();

$productos->setNombre("Pizza");
$productos->setPrecio(1);
$productos->setImg("");

echo "Introduciendo datos.";
echo DBUSER;


$productos->set();
// echo $productos->getMessage();
// $productos->setId(27);
// $productos->setPrecio(10);
// $productos->edit();

// $resultado=$productos->getAll();

// var_dump($resultado);


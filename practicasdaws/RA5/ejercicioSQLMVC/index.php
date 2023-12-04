<?php
include("config/config.php");
include("models/Animales.php");

$datos = array("nombre"=>"gato");

echo "Clases sin instanciar <br/>";
$sh_singleton1=Animales::getInstancia();
$sh_singleton1->setNombre($datos["nombre"]);
$sh_singleton1->set();
$sh_singleton1->setID(3);
$sh_singleton1->setNombre("GATO");
$sh_singleton1->edit();
// var_dump($sh_singleton1);
// $sh_singleton2=Animales::getInstancia();
// var_dump($sh_singleton2);
// $sh_singleton2=Animales::getInstancia();
// var_dump($sh_singleton2);

echo "<br/>Instanciando objetos<br/>";

// $sh_singleton1->setNombre($datos["nombre"]);
// $sh_singleton1->set($datos);
// $datos=$sh_singleton1->get(4);
// var_dump($datos);


?>
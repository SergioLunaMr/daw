<?php
include("../config/config.php");
$carritoTemp=unserialize($_SESSION["carrito"]);
$_SESSION["carrito"]=serialize(new Carrito());
$escribir=$carritoTemp;
$nombrefichero="ticket" . date('m-d-Y h:i:s a', time()) . ".txt";
$nombrefichero=join("_", explode(" ", $nombrefichero));
$nombrefichero=join("-", explode(":", $nombrefichero));
$archivo = fopen($nombrefichero, "w");
fputs($archivo, $escribir);
fclose($archivo);

$nombreComanda="comanda" . date('m-d-Y h:i:s a', time()) . "pendiente.txt";
$nombreComanda=join("_", explode(" ", $nombrefichero));
$nombreComanda=join("-", explode(":", $nombrefichero));
$archivoComanda = fopen($nombreComanda, "w");
fputs($archivoComanda, $escribir);
fclose($archivoComanda);
include("closesession.php");
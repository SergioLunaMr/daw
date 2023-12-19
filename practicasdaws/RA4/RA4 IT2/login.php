<?php
if (!isset($_POST["enviar"])) {
    header("location:inicio.php");
}
session_start();
include("lib/functions.php");

$usuario = test_input($_POST["usuario"]);
$password = test_input($_POST["password"]);

$archivo = fopen('model/usuarios.txt', 'r');
$usuariodb = test_input(fgets($archivo));
$passwordb = test_input(fgets($archivo));
fclose($archivo);

$autenticado = false;
if ($usuario == $usuariodb && $password == $passwordb) {
    $_SESSION["auth"] = true;
    $_SESSION["user"] = $usuariodb;
}
header("location:inicio.php");
?>
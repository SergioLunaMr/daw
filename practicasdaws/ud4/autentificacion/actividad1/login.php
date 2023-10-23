<?php
/*
author: Sergio Luna Martín
date: 20/10/2023
*/
if(!isset($_POST["enviar"])){
    header("location:inicio.php");
}
session_start();
include("lib/functions.php");
include("config/usuarios.php");

$usuario =  test_input($_POST["usuario"]);
$password = test_input($_POST["password"]);

$autenticado=false;
foreach($usuarios as $key => $value) {
    if($usuario == $usuarios[$key]["user"] && $password == $usuarios[$key]["password"]) {
        $autenticado=true;
        $user = $usuarios[$key]["user"];
    }
}

$_SESSION["auth"] = $autenticado;
$_SESSION["user"] = $user;
header("location:inicio.php");


?>
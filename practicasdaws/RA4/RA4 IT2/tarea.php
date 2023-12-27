<?php
if (!isset($_POST["enviar"])) {
    header("location:inicio.php");
}
session_start();
include("lib/functions.php");

if (isset($_POST["recoger"])) {
    $tarea = test_input($_POST["tarea"]) . "\n";
    $nombrefichero = "model/" . $_SESSION["user"] . "_tareas.txt";
    $archivo = fopen($nombrefichero, "a");
    $cabecera=$_SESSION["dia"] . " de " . $_SESSION["mes"] . " de " . $_SESSION["anio"];
    fwrite($archivo, $cabecera);
    fwrite($archivo, $tarea);
    fclose($archivo);
}

if(isset($_POST["devolver"])) {
    $_SESSION["tarea"]="";
    $nombrefichero = "model/" . $_SESSION["user"] . "_tareas.txt";
    $archivo = fopen($nombrefichero, "r");
    while(!feof($archivo)) {
        $_SESSION["tarea"]=$_SESSION["tarea"]. fgets($archivo) . "\n";
      }
    fclose($archivo);
}

header("location:inicio.php");
?>
<?php
/*
author: Sergio Luna Martín
date: 04/11/2023
*/
include("config/verbos.php");
include("../lib/functions.php");

$formenviado=false;
$errorinput=false;
$errorrange=false;
$nverbs;
$naciertos;

$corregido=false;
$respuestas=[];
$correcion="";

function isInRange($number) {
    $number >= 1 && $number <= sizeof($GLOBALS["verbos"]) ? $flag = true : $flag = false;
    return $flag;
}
if(isset($_POST["resolver"])){

}
else if(isset($_POST["corregir"])){
    $corregido=true;
    foreach ($_POST as $name=>$respuesta){
        if($name!="corregir"){
            $respuestas[$name]=$respuesta;
        }
    }
    $correccion=corregirVerbs($respuestas);
}
else if (isset($_POST["enviar"])) {
    $naciertos = $_POST["naciertos"];
    $nverbs = $_POST["nverbs"];
    if(num_test($nverbs)) {
        isInRange($nverbs) ? $formenviado=true : $errorrange=true;
    }
    else {
        $errorinput=true;
    }
}
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Ejercicio 1: Verbos irregulares</title>
</head>

<body>
    <h2>Ejercicio 1: Verbos irregulares.</h2>
    <form method="post" action="index.php">
        <h3>Selecciona el nivel de dificultad:</h3>
        <label for="naciertos">Número de tiempos a acertar:
            <select name="naciertos">
                <option value="1" selected="selected">1 tiempo a acertar</option>
                <option value="2">2 tiempos a acertar</option>
                <option value="3">3 tiempos a acertar</option>
            </select></label>
        <br>
        <label for="nverbs">Número de verbos a evaluar:<input type="text" name="nverbs">
    <?php 
        if($errorinput==true) {
            echo "<span class='error'>Introduce un valor númerico</span>";
        }
        else if($errorrange==true) {
            echo "<span class='error'>Introduce un valor númerico correcto, entre 1 y " . sizeof($GLOBALS["verbos"]) ."</span>";
        }
    ?>
    </label>
        <br>
        <button type="submit" name="enviar" value="enviar">Enviar</button>
        <a href='../index.php' class='boton'>Volver al inicio</a>
    </form>
    <?php
    if($formenviado){
        randomizerVerbs($nverbs, $naciertos);
    }
    else if($corregido){
        echo $correccion;
    }
    ?>

</body>

</html>
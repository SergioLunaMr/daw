<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
*/
//foreach.Incluimos la librería de funciones comunes.
include("../lib/functions.php");
//foreach.formenviado es una variable que nos permite saber si se ha pulsado submit una vez o no..
$formenviado = false;
$nombre;
$idiomas = array();
//foreach.Comprobamos si el formulario se ha enviado.
if (isset($_POST["enviar"])) {
    //foreach.Seteamos formenviado a true.
    $formenviado = true;
    //foreach.Sacamos el nombre enviado mediante post con el formulario.
    $nombre = $_POST["nombre"];
    //foreach.Sacamos el nombre enviado mediante post con el formulario.
    $idiomas = $_POST[""];
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
    <title>Ejercicio 2: Sergio Luna Martín</title>
</head>

<body>
    <h2>Ejercicio 2: Examen idiomas
        <?php include("../include/cabecera.php"); ?>
        <?php
        if ($formenviado) {
            
        }
        //foreach.Si no se ha enviado, incluimos el formulario.
        else {
            include("../include/formEjercicio2.php");
        }
        ?>
        <?php include("../include/footer.php"); ?>
</body>
</html>
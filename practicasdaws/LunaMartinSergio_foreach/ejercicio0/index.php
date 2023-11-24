<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
*/
//foreach.Incluimos la librería de funciones comunes.
include("../lib/functions.php");
//foreach.formenviado es una variable que nos permite saber si se ha pulsado submit una vez o no..
$formenviado=false;
//foreach.Comprobamos si el formulario se ha enviado.
if(isset($_POST["enviar"])){
    //Seteamos formenviado a true.
    $formenviado=true;
    //Sacamos el dni enviado mediante post con el formulario y realizamos la función de dniContraseña.
    $dni=dniContrasena($_POST["dni"]);
}
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <title>Ejercicio 0: Sergio Luna Martín</title>
</head>

<body>
    <h2>Ejercicio 0: DNI</h2>    
<?php
include("../include/cabecera.php");
//Si el formulario se ha enviado, mandadamos el resultado de la función DNI.
    if($formenviado){
        echo "Tu contraseña en base a tu DNI " . $_POST["dni"] . " es: " . $dni;
    }
//Si no se ha enviado, incluimos el formulario.
    else {
        include("../include/formEjercicio0.php");
    }
    include("../include/footer.php");
?>
</body>
</html>
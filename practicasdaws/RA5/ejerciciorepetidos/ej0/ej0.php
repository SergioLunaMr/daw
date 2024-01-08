<?php
/**
 * autor: Sergio Luna Martin
 * descripcion: ejercicio que asigna una palabra según el dni
 * fecha: 08/01/2024
 * version: 1.0.0
*/
 

$dni="";
$password="";

/**
 * descripcion: calculo de dni
 * input: dni
 * return string
 */
function calcDni($dni){
    #array indexado de passwords
    $palabras = array ("for", "if", "else", "while", "function", "array", "php");
    #sumador que almacenará la suma de los dígitos del dni
    $sum = 0;
    for($i = 0; $i < strlen($dni); $i++){
        $sum += $dni[$i];
    }
    return $palabras[$sum%7];
}

#determinamos si procesamos el formulario
if(isset($_POST["dni"])){
    $dni = $_POST("dni");
    $password= calcDni($_POST("dni"));
}

?>

<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='author' content='SergioLunaMartín'>
<title>SergioLunaMartín</title>
</head>
<body>
    <h1>Password</h1>
    <form>
    <input type="text" name="password">
    <submit>
    </form>
</body>
</html>
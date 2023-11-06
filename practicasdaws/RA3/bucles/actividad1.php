<?php
/** 
*@author: Sergio Luna Martín
*Date: 29/09/2023
*Ejercicio 1: Muestra los números del 1 al 10.
*/

//Variables
$mensaje="";

//Controlador
for($i=1;$i<=10;$i++){
    $mensaje=$mensaje . "</br>${i}";
}

//Vista
echo $mensaje;
?>
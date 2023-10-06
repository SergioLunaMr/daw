<?php
/* 
Author: Sergio Luna Martín
Date: 29/09/2023
Ejercicio 2: Muestra los primeros 3 números pares.
*/

//Variables
$html = "";
$contador = 0;
$numero = 1;

//Controlador
while ($contador < 3) {
    if (($numero % 2) == 0) {
        $html = $html . "<br/>${numero}";
        $contador++;
    }
    $numero++;
}

//Vista
echo $html;
?>
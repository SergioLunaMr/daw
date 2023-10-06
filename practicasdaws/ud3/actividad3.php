<?php
/* 
Author: Sergio Luna Martín
Date: 29/09/2023
Ejercicio 3: Tablas de multiplicar del 1 al 10.
*/

//Variables
$header = "<head><style>
    td{
         border: black, solid, 1px;
    }
    </style><head>";

$html = "<table><tr><td class=\"head\"></td><td class=\"head\">1</td><td class=\"head\">2</td><td class=\"head\">3</td><td class=\"head\">4</td>
<td class=\"head\">5</td><td class=\"head\">6</td><td class=\"head\">7</td><td class=\"head\">8</td>
<td class=\"head\">9</td><td class=\"head\">10</td></tr>";

//Controlador
for ($i = 1; $i <= 10; $i++) {
    $html = $html . "<tr><td class=\"head\">${i}</td>";
    for ($j = 1; $j <= 10; $j++) {
        $html = $html . "<td>${i} * ${j} = " . $i * $j . "</td>";
    }
    $html = $html . "</tr>";
}
$html = $html . "</table>";
//Vista
?>
    <head>
    <style>
        td {
            border-color: black;
            border-style: solid;
        }
    </style>

    <head>

        <?php
        echo $html;
        ?>
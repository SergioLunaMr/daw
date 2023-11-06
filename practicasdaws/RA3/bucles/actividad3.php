<?php
/** 
*@author: Sergio Luna Martín
*Date: 29/09/2023
*Ejercicio 3: Tablas de multiplicar del 1 al 10.
*/

//Variables
$html = "<table><tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td>
<td>5</td><td>6</td><td>7</td><td>8</td>
<td>9</td><td>10</td></tr>";

//Controlador
for ($i = 1; $i <= 10; $i++) {
    $html = $html . "<tr><td>${i}</td>";
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
        table, td {
            border-color: black;
            border-style: solid;
            border-collapse: collapse;
        }
    </style>

    <head>

        <?php
        echo $html;
        ?>
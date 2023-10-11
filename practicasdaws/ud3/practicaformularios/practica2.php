<?php
/* 
Author: Sergio Luna Martín
Date: 29/09/2023
Práctica 2: Tablas de multiplicar del 1 al 10 con inputs aleatorios
*/

include("config.php");

$aciertos = 0;
$formenviado = false;

$valoresrecogidos = array();
$valoresaleatorios = array();

//Variables utilizadas

if (isset($_POST["submit"])) {
    $formenviado = true;
    foreach ($_POST["num"] as $fila => $valor1) {
        foreach ($valor1 as $columna => $valor2) {
            $valoresaleatorios[] = array($fila, $columna);
            $valoresActuales[$fila][$valor] = $valor2;
        }
    }
} else {
    $html = "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'><table><tr><td class=\"head\"></td><td class=\"head\">1</td><td class=\"head\">2</td><td class=\"head\">3</td><td class=\"head\">4</td>
<td class=\"head\">5</td><td class=\"head\">6</td><td class=\"head\">7</td><td class=\"head\">8</td>
<td class=\"head\">9</td><td class=\"head\">10</td></tr>";

    //Aleatorizar array
    $contador = 0;
    do {
        $arrayi[] = (rand(1, 10));
        $arrayj[] = (rand(1, 10));
        $contador++;
    } while ($contador < numinputs);

    //Controlador
    $flag = true;
    $contadorname = 1;

    for ($i = 1; $i <= 10; $i++) {
        $html = $html . "<tr><td class=\"head\">${i}</td>";
        for ($j = 1; $j <= 10; $j++) {
            for ($h = 0; $h < 5; $h++) {
                if ($i == $arrayi[$h] && $j == $arrayj[$h]) {
                    $flag = false;
                }
            }
            if ($flag) {
                $html = $html . "<td>${i} * ${j} = " . $i * $j . "</td>";
            } else {
                $html = $html . "<td>${i} * ${j} = <input type='text' name='input" . $contadorname . "'></td>";
                $flag = true;
            }
        }
        $html = $html . "</tr>";
    }
    $html = $html . "</table><button>Enviar</button></form>";
}
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
        <style>
            td {
                border: black, solid, 1px;
            }
        </style>
        <?php
        echo $html;
        ?>
<?php
/* 
Author: Sergio Luna Martín
Date: 29/09/2023
Práctica 2: Tablas de multiplicar del 1 al 10 con inputs aleatorios
*/

//Variables

//Constante con el número de inputs que habrá
define("numinputs", 5);

$input1;
$input2;
$input3;
$input4;
$input5;

$header = "<head><style>
    td{
         border: black, solid, 1px;
    }
    </style><head>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input[] = $_POST["input1"];
    $input[] = $_POST["input2"];
    $input[] = $_POST["input3"];
    $input[] = $_POST["input4"];
    $input[] = $_POST["input5"];
    $arrayrecibido1= $_POST["arrayi"];
    $arrayrecibido2= $_POST["arrayj"];

    var_dump($_POST);

    for($i=0;$i<5;$i++){
        $resultado=(int)$arrayi[$i] * (int)$arrayj[$i];
        if($resultado==$input[$i]){
            echo "El resultado del ". $i+1 . "º input es acertado.";
        }
        else {
            echo "El resultado del ". $i+1 . "º input es erróneo.";
        }
    }

    echo $header;
    echo $input1 . $input2 . $input3 . $input4 . $input5;
} 
else {
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
            echo $header;
            echo $html;
} ?>
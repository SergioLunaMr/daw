<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 11/10/2023
 *Ejercicio 4: Dado el mes y año almacenados en variables, escribir un programa que muestre el
 * calendario mensual correspondiente. Marcar el día actual en verde y los festivos
 * en rojo.
 */

$anio=date("Y");
$mes=date("n");
$dias=30;
$diasemana="";
$festivos=["6-1", "7-4", "1-5", "15-8", "12-10", "1-11", "6-12", "8-12", "25-12"];
$html="<table>";

?>
<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='author' content='SergioLunaMartín'>
<link rel="stylesheet" type="text/css" href="actividad5.css">
<title>Actividad 5: Bucles</title>
</head>
<body>
<?php

switch($mes){
    case "1":
    case "3":
    case "5":
    case "7":
    case "8":
    case "10":
    case "12": {
        $dias=31;
        break;
    }
    case "2": {
        ($anio%4==0) ? $dias=29: $dias=28;
        break;
    }
}
$diasemana=date('w', strtotime(("1"."-".$mes."-".$anio)));
for($i=1;$i<=$dias+$diasemana;$i++){
    if($i==1){
        $html=$html . "<tr>";
    }
    else if(($i-1)%7==0){
        $html=$html . "</tr><tr>";
    }
    if($i>$diasemana){
        $html=$html . "<td";
        ($i==date("j")) ? $html=$html . " class='actual'": "";
        for($j=0;$j<count($festivos);$j++){
            (date($i."-".$mes."-".$anio)==date($festivos[$j]."-".$anio)) ? $html=$html . " class='festivo'" : "";
        } 
        $html=$html . ">".date('l', strtotime($i."-".$mes."-".$anio)).": " . $i-$diasemana . "</td>";
    }
    else{
        $html= $html . "<td>".date('l', strtotime(($i."-".$mes."-".$anio)))."</td>";
    }
}
$html = $html . "</table>";
echo $html;

?>
</body>
</html>
<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
/*Escribir un script que utilizando variables permita obtener el siguiente resultado:
Valor es string.
Valor es double.
Valor es boolean.
Valor es integer.
Valor is NULL.
*/

$string="Hola";
$double=9.90;
$boolean=false;
$integer=19;
$nulo=null;


echo "<p>" . gettype($string) . "</p>";
echo "<p>" . gettype($double) . "</p>";
echo "<p>" . gettype($boolean) . "</p>";
echo "<p>" . gettype($integer) . "</p>";
echo "<p>" . gettype($nulo) . "</p>";

?>
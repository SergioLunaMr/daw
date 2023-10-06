<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
/*A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer esto 
y escribe un script con la siguiente salida:
string(5) “Harry”
Harry
int(28)
NULL
*/
$cadena="Harry";
$numero=28;
$nulo=NULL;

echo "<p>" . var_dump($cadena) . "</p>";
echo "<p>" . $cadena . "</p>";
echo "<p>" . var_dump($numero) . "</p>";
echo "<p>" . var_dump($nulo) . "</p>";

?>
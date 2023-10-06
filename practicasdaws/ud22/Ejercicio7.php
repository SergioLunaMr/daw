<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
/*Escribir un script que declare una variable y muestre la siguiente información en pantalla:
Valor actual 8.
Suma 2. Valor ahora 10.
Resta 4. Valor ahora 6.
Multipica por 5. Valor ahora 30.
Divide por 3. Valor ahora 10.
Incrementa el valor en 1. Valor ahora 11.
Decrementa el valor en 1. Valor ahora 11.
*/

$valor=8;
echo "<p>Valor actual: ${valor}</p>";
$valor+=2;
echo "<p>Suma 2. Valor ahora: ${valor}</p>";
$valor-=4;
echo "<p>Resta 4. Valor ahora: ${valor}</p>";
$valor*=5;
echo "<p>Multiplica por 5. Valor ahora: ${valor}</p>";
$valor/=3;
echo "<p>Divide por 3. Valor ahora: ${valor}</p>";
$valor++;
echo "<p>Incrementa el valor en 1. Valor ahora: ${valor}</p>";
$valor--;
echo "<p>Decrementa el valor en 1. Valor ahora: ${valor}</p>";




?>
<?php 
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
/*Script que cargue las siguientes variables:
$x=10;
$y=7;
y muestre
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3
*/

$x=10;
$y=7;

echo "<p>${x} + ${y} = " . $x+$y . "</p>";
echo "<p>${x} - ${y} = " . $x-$y . "</p>";
echo "<p>${x} * ${y} = " . $x*$y . "</p>";
echo "<p>${x} / ${y} = " . $x/$y . "</p>";
echo "<p>${x} % ${y} = " . $x%$y . "</p>";
?>
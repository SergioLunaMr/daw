<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
/*¿Cuál es la salida del siguiente script?:
<?php
$ciclo="DAW";
$modulo="DWES";
print "<p>";
printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
print "</p>";
Prueba el script y modifícalo para las palabras DAW y DWES apararezcan en negrita. 
Investiga uso de print y printf para salida de texto.
*/
$ciclo="DAW";
$modulo="DWES";
print "<p>";
printf("<b>%s</b> es un módulo de %d curso de <b>%s</b>", $modulo, 2, $ciclo);
print "</p>";

//La mayor diferencia es que printf permite incluir formato y print no.
?>

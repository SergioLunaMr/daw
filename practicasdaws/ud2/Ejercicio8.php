<div class="container my-4">
    <div class="row my-4">
        <div class="col"><a href="../daws.html">Volver atrás -></a></div>
    </div>
    <div>Código: <a href="https://github.com/SergioLunaMr/Practica2DAWS/blob/master/Ejercicio8.php">GitHub</a></div>
</div>
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
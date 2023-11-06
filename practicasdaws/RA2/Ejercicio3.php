<div class="container my-4">
    <div class="row my-4">
        <div class="col"><a href="../daws.html">Volver atrás -></a></div>
    </div>
    <div>Código: <a href="https://github.com/SergioLunaMr/Practica2DAWS/blob/master/Ejercicio3.php">GitHub</a></div>
</div>
<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
//Script que, a partir del radio almacenado en una variable y la definición de la constante PI, calcule el área del círculo 
//y la longitud de la circunferencia. El debe mostrar valor de radio, longitud de la circunferencia, área del círculo y 
//dibujará un círculo utilizando gráficos vectoriales.

//Cargamos las variables
define("PI", 3.1416);
$radio = 10;
$area = PI * $radio;
$area = pow($area, 2);
$longitud = ($radio * 2) * PI;

//Mostramos el contenido
echo "<svg width='100' height='100'><circle cx='50' cy='50' r=${radio} stroke='black' stroke-width='1' fill='white' /></svg>";
echo "<div>Radio: ${radio}</div>";
echo "<div>Área: ${area}</div>";
echo "<div>Radio: ${longitud}</div>";


?>
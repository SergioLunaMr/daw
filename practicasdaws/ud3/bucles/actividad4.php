<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 11/10/2023
 *Ejercicio 4: Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
 * hexadecimal que le corresponde. Cada celda será un enlace a una página que
 * mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
 * conocimientos que tienes?
 */
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <style>
        body {
            color:gray;
        }
    </style>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <script src='main.js'></script>
    <title>SergioLunaMartín</title>
</head>

<body>
    <?php
    echo "<table>";
     for ($i = 0; $i <= 255; $i += 20) {

         for ($j = 0; $j <= 255; $j += 20) {
             
             for ($k = 0; $k <= 255; $k += 20) {
                echo "<tr><td style='background-color: rgb(" . $i . "," . $j . "," . $k. ")'>" . "$i,$j,$k</td></tr>";
            }

        }
     }
     echo "</table>";
    ?>
</body>

</html>
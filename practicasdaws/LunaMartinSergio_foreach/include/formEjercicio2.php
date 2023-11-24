<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
Formulario del ejercicio 1.
*/
//foreach.Incluimos las variables globales
include("../config/config.php");
$idiomas = $GLOBALS["idiomas"];
$preguntas = $GLOBALS["preguntas"];

?>
<form action="index.php" method="post">
    <label for="nombre">Introduce tu nombre: <input type="text" name="nombre"></label><br />
    <label>Introduce los idiomas:
        <?php
        //foreach.Creamos un checkbox múltiple con varios idiomas a escoger
        for ($i = 0; $i < count($idiomas); $i++) {
            echo "<input type='checkbox' id='idioma${i}' name='$idiomas[$i]' value='$idiomas[$i]'>
            <label for='$idiomas[$i]'> $idiomas[$i]</label>";
        }
        ?>
    </label><br />
    <?php
    //foeach.Mostramos las preguntas, para ello contamos cuantas hay.
    for ($i = 0; $i < count($preguntas); $i++) {
        //foreach.Mostramos la pregunta
        echo "<p>" . $preguntas[$i]['pregunta'];
        //foreach.Para elegir respuesta, si es tipo text incluimos un input y si es un tipo Multiple-value incluimos un select
        switch($preguntas[$i]['Tipo']){
            case "text": echo "<input type='text' name='${i}'></p>";break;
            case "Multiple-choice": echo "<label for='${i}'> Elige una respuesta: </label>";
                    echo "<select name='test${i}' id='${i}'>";
            for ($j=0;$j<count($preguntas[$i]["Opciones"]);$j++){
                echo "<option value='". $preguntas[$i]['Opciones'][$j] . "'>". $preguntas[$i]['Opciones'][$j] . "</option>";
            }
            echo "</select><br/>";
        }
    }
    ;
    ?>
    <input type="submit" name="enviar" value="Enviar">
</form>
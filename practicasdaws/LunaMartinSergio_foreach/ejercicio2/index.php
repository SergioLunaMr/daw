<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
*/
//foreach.Incluimos la librería de funciones comunes.
include ("../lib/functions.php");
//foreach.formenviado es una variable que nos permite saber si se ha pulsado submit una vez o no..
$formenviado = false;
$nombre;
$nota=0;
//foreach.Comprobamos si el formulario se ha enviado.
if (isset ($_POST["enviar"])) {
    //foreach.Seteamos formenviado a true.
    $formenviado = true;
    //foreach.Sacamos el nombre enviado mediante post con el formulario.
    if (isset ($_POST["nombre"])) {
        if($_POST["nombre"]=="")
        {
            $nombre="Invitado";
        }
        else {
            $nombre = $_POST["nombre"];
        }
    }
    //Si no se ha introducido nombre, se identificará al usuario como invitado.
    else {
        $nombre = "Invitado.";
    }
    //foreach.Sacamos el nombre enviado mediante post con el formulario.
    if (isset ($_POST["idioma"])) {
        $idiomasForm = $_POST["idioma"];
    }
    //En caso contrario, idiomasForm tiene un valor negativo, indicando que no hay ningún idioma.
    else {
        $idiomasForm = array("Ninguno");
    }
    //Se sacan los resultados para su comprobación
    if (isset ($_POST["respuesta"])) {
        $respuesta = $_POST["respuesta"];
    }
    //En caso contrario, se envía un false para realizar la comprobación de que el usuario no ha enviado ninguna respuesta
    else {
        $respuesta = false;
    }
}
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Ejercicio 2: Sergio Luna Martín</title>
</head>

<body>
    <h2>Ejercicio 2: Examen idiomas
        <?php include ("../include/cabecera.php"); ?>
        <?php
        if ($formenviado) {
            //Si se ha enviado el formulario, se procede a revisarse.      ?>
            <p>Hola,
                <?php echo $nombre ?>
            </p>
            <p>Tus idiomas son:</p>
            <ul>
                <?php
                for ($i = 0; $i < count($idiomasForm); $i++) {
                    echo "<li>" . $idiomasForm[$i] . "</li>";
                }
                ?>
            </ul>
            <?php
            //foeach.Mostramos las preguntas de nuevo.
            for ($i = 0; $i < count(preguntas); $i++) {
                //foreach.Mostramos la pregunta
                echo "<p>" . preguntas[$i]['pregunta'];
                //foreach.Para elegir respuesta, si es tipo text buscamos en el array de text y si es input en el de multiple
                switch (preguntas[$i]['Tipo']) {
                    //Pregunta tipo input
                    case "text":
                        if (is_array(preguntas[$i]["Respuesta"])) {
                            //Puede haber más de una respuesta
                            if (in_array($respuesta[$i], preguntas[$i]["Respuesta"])) {
                                //Respuesta correcta, se imprime en verde
                                echo "<p class='acierto'>" . $respuesta[$i] . "</p>";
                                $nota += 1;
                            } else {
                                //Respuesta fallida, se imprime la respuesta en rojo y luego la solución
                                if($respuesta[$i]=="")
                                {
                                    $respuesta[$i]="Vacío";
                                }
                                echo "<p class='fallo'>" . $respuesta[$i] . "</p>";
                                $stringSolucion = "<ul class='solucion'>";
                                for ($j = 0; $j < count(preguntas[$i]["Respuesta"]); $j++) {
                                    $stringSolucion .= "<li>" . preguntas[$i]["Respuesta"][$j];
                                    "</li>";
                                }
                                $stringSolucion .= "</ul>";
                                echo $stringSolucion;
                            }
                        }
                        //Solo hay una respuesta
                        else {
                            if ($respuesta[$i] == preguntas[$i]["Respuesta"]) {
                                echo "<p class='acierto'>" . $respuesta[$i] . "</p>";
                                $nota += 1;
                            } else {
                                echo "<p class='fallo'>" . $respuesta[$i] . "</p>";
                                echo "<p class='solucion'>" . $preguntas[$i]["Respuesta"] . "</p>";
                            }
                        }
                        break;
                    case "Multiple-choice":
                        echo "<ul>";
                        for ($j = 0; $j < count(preguntas[$i]["Opciones"]); $j++) {
                            if ($respuesta[$i] == preguntas[$i]['Opciones'][$j]) {
                                if ($respuesta[$i] == preguntas[$i]['Respuesta'])
                                {
                                    echo "<li class='acierto'>" . $respuesta[$i] . "</li>";
                                    $nota += 1;
                                } 
                                else
                                {
                                    echo "<li class='fallo'>" . $respuesta[$i] . "</li>";
                                    $nota -= 0.25;
                                }
                            }
                            elseif (preguntas[$i]['Opciones'][$j] == preguntas[$i]['Respuesta'])
                            {
                                echo "<li class='solucion'>" . preguntas[$i]['Opciones'][$j] . "</li>";
                            }
                            else {
                                echo "<li>" . preguntas[$i]['Opciones'][$j] . "</li>";
                            }
                        }
                        echo "</ul>";
                }
            }
        }
        //foreach.Si no se ha enviado, incluimos el formulario.
        else {
            ?>
            <form action="index.php" method="post">
                <label for="nombre">Introduce tu nombre: <input type="text" name="nombre"></label><br />
                <label>Introduce los idiomas:
                    <?php
                    //foreach.Creamos un checkbox múltiple con varios idiomas a escoger
                    for ($i = 0; $i < count(idiomas); $i++) {
                        echo "<input type='checkbox' id='" . idiomas[$i] . "' name='idioma[]' value='" . idiomas[$i] . "'>
            <label for='" . idiomas[$i] . "'> " . idiomas[$i] . "</label>";
                    }
                    ?>
                </label><br />
                <?php
                //foeach.Mostramos las preguntas, para ello contamos cuantas hay.
                for ($i = 0; $i < count(preguntas); $i++) {
                    //foreach.Mostramos la pregunta
                    echo "<p>" . preguntas[$i]['pregunta'];
                    //foreach.Para elegir respuesta, si es tipo text incluimos un input y si es un tipo Multiple-value incluimos un select
                    switch (preguntas[$i]['Tipo']) {
                        case "text":
                            echo "<input type='text' name='respuesta[]'></p>";
                            break;
                        case "Multiple-choice":
                            echo "<label for='multiple[]'> Elige una respuesta: </label>";
                            echo "<select name='respuesta[]' id='multiple$i'>";
                            for ($j = 0; $j < count(preguntas[$i]["Opciones"]); $j++) {
                                echo "<option value='" . preguntas[$i]['Opciones'][$j] . "'>" . preguntas[$i]['Opciones'][$j] . "</option>";
                            }
                            echo "</select><br/>";
                    }
                }
                ;
                ?>
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
        }
        echo "Tu nota final es: " . $nota;
        ?>
        <?php include ("../include/footer.php"); ?>
</body>
</html>
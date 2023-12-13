<?php
// Contenido de index.php

// Incluye el archivo de tests
include 'config/test.php';
$stringaux = "";
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="../css/style.css">
    <title>SergioLunaMartín</title>
</head>

<body>
    <?php

    if (isset($_POST['iniciar']) || isset($_POST["corregir"])) {
        //Si se quiere corregir
        if (isset($_POST["corregir"])) {
            $test = $_POST["test"];
            $respuestasCorrectas = $aTests[$test - 1]['Corrector'];

            $respuestasUsuario = [];
            foreach ($_POST as $clave => $valor) {
                if (str_contains($clave, "pregunta")) {
                    array_push($respuestasUsuario, $valor);
                }
            }
        }
        // Procesamiento del formulario
        $testId = $_POST['test'];
        // Muestra el formulario con las preguntas del test seleccionado
        echo "<form method='post' action='index.php'>";
        foreach ($aTests[$testId - 1]['Preguntas'] as $pregunta) {
            if (file_exists("img/dir_img_test${testId}/img{$pregunta['idPregunta']}.jpg")) {
                $stringaux = "<br><img src='img/dir_img_test${testId}/img{$pregunta['idPregunta']}.jpg'></img>";
            } else {
                $stringaux = "";
            }
            $stringaux = $stringaux . "</br><p class='pregunta'>{$pregunta['Pregunta']}</p></br>";
            //Correcion
            if (isset($_POST["corregir"])) {
                $claveRespuesta="";
                switch($respuestasCorrectas[$pregunta['idPregunta']-1]) {
                    case 'a': $claveRespuesta=0;break; case 'b': $claveRespuesta=1;break; case 'c': $claveRespuesta=2;break; 
                }
                if($respuestasCorrectas[$pregunta['idPregunta']-1]==$respuestasUsuario[$pregunta['idPregunta']-1]){
                    $stringaux = $stringaux . "<p class='pregunta'>${respuestasUsuario[$pregunta['idPregunta']-1]} ✔️</p>";
                    $stringaux = $stringaux . "<span class='acierto'>" . $pregunta['respuestas'][$claveRespuesta] . "</span><br><hr>";

                }
                else {
                    $stringaux = $stringaux . "<p class='pregunta'>${respuestasUsuario[$pregunta['idPregunta']-1]} ❌</p>";
                    $stringaux = $stringaux . "<span class='error'>La respuesta correcta es: " . $pregunta['respuestas'][$claveRespuesta] . "</span><br><hr>";
                }
                echo $stringaux;
            }
            //No corregido
            else {
                $stringaux = $stringaux . `<label for='pregunta{$pregunta['idPregunta']}'>Tu respuesta:</label>`;
                $stringaux = $stringaux . "<select name='pregunta{$pregunta['idPregunta']}' id='pregunta{$pregunta['idPregunta']}'>";
                foreach ($pregunta['respuestas'] as $respuesta) {
                    $stringaux = $stringaux . "<option value='" . substr($respuesta, 0, 1) . "'>" . $respuesta . "</option>";
                }
                $stringaux = $stringaux . "</select></br><hr>";
                echo $stringaux;
            }

        }
        if (isset($_POST["corregir"])) {
            echo "<a href='index.php' class='boton'><- Volver atrás</a>";
            echo "</form>";
        }
        else {
            echo "<input name='corregir' type='submit' value='Finalizar Test'>";
            echo "<input type='hidden' name='test' value='$testId'>";
            echo "</form>";
        }
    } else {
        // Muestra el formulario de selección de tests
        echo "<form method='post' action='index.php'>";
        echo "<label for='test'>Selecciona un test:</label>";
        echo "<select name='test' id='test'>";
        foreach ($aTests as $test) {
            echo "<option value='{$test['idTest']}'>Test {$test['idTest']} - {$test['Permiso']} - {$test['Categoria']}</option>";
        }
        echo "</select>";
        echo "<input type='submit' name='iniciar' value='Iniciar Test'>";
        echo "</form>";
    }

    if (isset($testId)) {

    }
    ?>
</body>

</html>
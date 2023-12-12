<?php
// Contenido de index.php

// Incluye el archivo de tests
include 'config/test.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesamiento del formulario
    $testId = $_POST['test'];
    if(isset($_POST['respuesta'])){
        $respuestasUsuario = $_POST['respuesta'];
    }

    // Obtén las preguntas y respuestas correctas del test seleccionado
    $test = $aTests[$testId - 1];
    $respuestasCorrectas = $test['Corrector'];

    // Compara las respuestas del usuario con las respuestas correctas
    $respuestasCorrectasUsuario = array_map(function ($respuestaUsuario, $respuestaCorrecta) {
        return $respuestaUsuario == $respuestaCorrecta;
    }, $respuestasUsuario, $respuestasCorrectas);

    // Determina si el test fue superado
    $testSuperado = !in_array(false, $respuestasCorrectasUsuario);

    // Muestra el resultado utilizando emoticonos
    $resultado = ($testSuperado) ? '🎉 SUPERADO' : '😞 NO SUPERADO';

    echo "<p>Resultado del test: $resultado</p>";

    // Muestra las respuestas correctas e incorrectas
    echo "<p>Respuestas correctas: ";
    foreach ($respuestasCorrectasUsuario as $idPregunta => $esCorrecta) {
        echo ($esCorrecta) ? "$idPregunta " : "";
    }
    echo "</p>";

    echo "<p>Respuestas incorrectas: ";
    foreach ($respuestasCorrectasUsuario as $idPregunta => $esCorrecta) {
        echo (!$esCorrecta) ? "$idPregunta " : "";
    }
    echo "</p>";
} else {
    // Muestra el formulario de selección de tests
    echo "<form method='post' action='index.php'>";
    echo "<label for='test'>Selecciona un test:</label>";
    echo "<select name='test' id='test'>";
    foreach ($aTests as $test) {
        echo "<option value='{$test['idTest']}'>Test {$test['idTest']} - {$test['Permiso']} - {$test['Categoria']}</option>";
    }
    echo "</select>";
    echo "<input type='submit' value='Iniciar Test'>";
    echo "</form>";
}

if (isset($testId)) {
    // Muestra el formulario con las preguntas del test seleccionado
    echo "<form method='post' action='index.php'>";
    foreach ($aTests[$testId - 1]['Preguntas'] as $pregunta) {
        echo "<p>{$pregunta['Pregunta']}</p>";
        echo "<label for='respuestas[{$pregunta['idPregunta']}]'>Tu respuesta:</label>";
        echo "<input type='text' name='respuestas[{$pregunta['idPregunta']}]'>";
    }
    echo "<input type='submit' value='Finalizar Test'>";
    echo "<input type='hidden' name='test' value='$testId'>";
    echo "</form>";
}
?>
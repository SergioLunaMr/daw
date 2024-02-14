<?php
/**
 * Tablas de multiplicar
 * @author Sergio Luna Martín
 */

include 'config/config.php';


// $valores_actuales = [3][5] = 15;
// $valores_actuales = [4][6] = 24;
// $valores_actuales = [7][8] = 56;

$valores_actuales = array();
for ($i = 1; $i <= NUM_TABLAS; $i++) {
    for ($j = 1; $j <= NUM_TABLAS; $j++) {
        $valores_actuales[$i][$j] = "";
    }
}
//Array asociativo con los valores aleatorios

// $numeros_aleatorios = array();
// array("fila" => 3, "columna" => 5)
// array("fila" => 4, "columna" => 6
// array("fila" => 7, "columna" => 8)

$numeros_aleatorios = array();
$procesa_formulario = false;
$aciertos = 0;
$iconoRespuesta = "";
$claseRespuesta = "";
$num_huecos = NUM_HUECOS;



if (isset($_COOKIE['num_huecos'])) {
    $num_huecos = $_COOKIE['num_huecos'];
}

if (isset($_POST['enviar'])) {
    $procesa_formulario = true;
    foreach ($_POST['num'] as $fila => $valor_fila) {
        foreach ($valor_fila as $columna => $valor_columna) {
            $numeros_aleatorios[] = array("fila" => $fila, "columna" => $columna);
            $valores_actuales[$fila][$columna] = $valor_columna;
            if ($valores_actuales[$fila][$columna] == $fila * $columna) {
                $aciertos++;
            }
        }
    }
} else {
    for ($i = 0; $i < $num_huecos; $i++) {
        do {
            $fila = rand(1, 10);
            $columna = rand(1, 10);
        } while (in_array(array("fila" => $fila, "columna" => $columna), $numeros_aleatorios));
        $numeros_aleatorios[] = array("fila" => $fila, "columna" => $columna);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Tabla de multiplicar con inputs</h1>
    <a href="preferencias.php">Preferencias</a>

    <form action="" method="POST">
        <table>
            <tr>
                <th>X</th>
                <?php
                for ($i = 1; $i <= NUM_TABLAS; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                ?>
            </tr>
            <?php
            for ($i = 1; $i <= NUM_TABLAS; $i++) {
                echo "<tr>";
                echo "<td><b>" . $i . "</b></td>";
                for ($j = 1; $j <= NUM_TABLAS; $j++) {
                    if (in_array(array("fila" => $i, "columna" => $j), $numeros_aleatorios)) {
                        if ($procesa_formulario) {
                            $iconoRespuesta = $valores_actuales[$i][$j] == $i * $j ? '&#128512' : '&#128534';
                            $claseRespuesta = $valores_actuales[$i][$j] == $i * $j ? 'acierto' : 'error';
                        }
                        echo '<td><input type="text" class="' . $claseRespuesta . '" name="num[' . $i . '][' . $j . ']" value="' . $valores_actuales[$i][$j] . '" >' . $iconoRespuesta . '</td>';
                    } else {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if ($procesa_formulario) {
        echo "<p>Has acertado " . $aciertos . " de " . $num_huecos . "</p>";
    }

    ?>
</body>

</html> 
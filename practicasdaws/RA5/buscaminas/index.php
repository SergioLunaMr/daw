<?php
include("config/config.php");
function mostrarTablero(array $tablero)
{
    for ($f = 0; $f < TAMANOTABLERO; $f++) {
        for ($c = 0; $c < TAMANOTABLERO; $c++) {
            if (isset($_GET["coord"])) {
                var_dump($_GET["coord"]);
                $coord=explode(",", $_REQUEST["coord"]);
                if($f==reset($coord) && $c=end($coord)) {
                    echo $_SESSION["tablero"][$f][$c];
                }
            } else {
                echo $tablero[$f][$c];
            }
        }
        echo "</br>";
    }
}

function generaMinas(array $tablero)
{
    for ($i = 0; $i < NUMEROMINAS; $i++) {
        do {
            $fila = mt_rand(0, 9);
            $columna = mt_rand(0, 9);
        } while ($tablero[$fila][$columna] == 9);
        $_SESSION["tablero"][$fila][$columna] = 9;
        for ($z = max(0, $fila - 1); $z <= min(TAMANOTABLERO - 1, $fila + 1); $z++) {
            for ($j = max(0, $columna - 1); $j <= min(TAMANOTABLERO - 1, $columna + 1); $j++) {
                if ($_SESSION["tablero"][$z][$j] != 9) {
                    $_SESSION["tablero"][$z][$j] += 1;
                }

            }
        }
    }
    ;
}

session_start();
if (!isset($_SESSION["tablero"])) {
    $_SESSION["tablero"] = array();
    $_SESSION["visible"] = array();

    for ($f = 0; $f < TAMANOTABLERO; $f++) {
        for ($c = 0; $c < TAMANOTABLERO; $c++) {
            $_SESSION["tablero"][$f][$c] = 0; //Tablero no visible, del 0 al 8 indicando la proximidad con minas o 9 indicando minas.
            $_SESSION["visible"][$f][$c] = "<a id=\"coord\" value=\"" . $f . "," . $c . "\" href=\"index.php\">0</a>";
            ; //Tablero visible, empieza todo en false dado que empieza oculto.
        }
    }
}
echo "<a href=\"closesession.php\">CERRAR SESIÓN</a></br>";
generaMinas($_SESSION["tablero"]);
mostrarTablero($_SESSION["visible"]);

?>"
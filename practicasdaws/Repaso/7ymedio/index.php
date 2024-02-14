<?php

require_once ("config.php");
session_start();

//RANGE 1,40 mod 10

if (!isset ($_SESSION["partida"])) {
    $_SESSION["turno"] = 0;
    $_SESSION["partida"] = true;
    $barajaJuego = baraja;
    shuffle($barajaJuego);
    $_SESSION["baraja"] = $barajaJuego;
    $_SESSION["jugadasJugador"] = array();
    $_SESSION["jugadasMaquina"] = array();

    $dificultadMaquina = rand(5.0, 7.5);

    $puntuacionMaquina = 0;
    $puntuacionJugador = 0;

    do {
        $jugadaMaquina = array_pop($_SESSION["baraja"]);
        array_push($_SESSION["jugadasMaquina"], $jugadaMaquina);
        $puntuacionMaquina += $jugadaMaquina[0];
    } while ($puntuacionMaquina <= $dificultadMaquina);

    do {
        $jugadaJugador = array_pop($_SESSION["baraja"]);
        array_push($_SESSION["jugadasJugador"], $jugadaJugador);
        $puntuacionJugador += $jugadaJugador[0];
    } while ($puntuacionJugador <= 7.5);
} elseif (isset ($_POST["pedir"])) {
    $_SESSION["turno"]++;
} elseif (isset ($_POST["plantarse"])) {

} elseif (isset ($_POST["salir"])) {
    header("location:closession.php");
}
?>

<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <title>7 y 1/2</title>
</head>

<body>
    <?php
    echo "<p>Turno: " . $_SESSION["turno"] . "</p>";
    echo "<form action='index.php' method='POST'>
    <input type='submit' name='pedir'>Pedir otra</input>
    <input type='submit' name='plantarse'>Plantarse</input>
    <input type='submit' name='salir'>Cerrar sesión</input>
    </form>";
    var_dump($_SESSION["baraja"]);
    ?>
</body>

</html>
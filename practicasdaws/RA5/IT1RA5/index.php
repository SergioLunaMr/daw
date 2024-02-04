<?php
include("config/config.php");
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="css/style.css">
    <title>IT RA5</title>
</head>

<body>
    <h1>faMia</h1>
    <?php
    include("include/menu.php");
    if (isset($_POST["pedir"])) {
        $carritoTemp = unserialize($_SESSION["carrito"]);
        $_SESSION["carrito"] = serialize(new Carrito());
        $escribir = $_SESSION["comanda"];
        $nombrefichero = "ticket" . date('m-d-Y h:i:s a', time()) . ".txt";
        $nombrefichero = join("_", explode(" ", $nombrefichero));
        $nombrefichero = join("-", explode(":", $nombrefichero));
        $archivo = fopen($nombrefichero, "w");
        fputs($archivo, $escribir);
        fclose($archivo);

        $nombreComanda = "comanda" . date('m-d-Y h:i:s a', time()) . "pendiente.txt";
        $nombreComanda = join("_", explode(" ", $nombrefichero));
        $nombreComanda = join("-", explode(":", $nombrefichero));
        $archivoComanda = fopen($nombreComanda, "w");
        fputs($archivoComanda, $escribir);
        fclose($archivoComanda);
        include("include/closesession.php");
    }
    if (isset($_POST["opcion"])) {
        $stringaux = "include/" . $_POST["opcion"] . ".php";
        include($stringaux);
    } else {
        include("include/gestion.php");
        include("include/carrito.php");
    }
    include("include/footer.php");
    ?>
</body>

</html>
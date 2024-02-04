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
        $comandaContent;
        foreach ($carritoTemp->getProductos() as $producto) {
            if (get_class($producto) != "Pizza") {
                $comandaContent = $comandaContent . "Nombre: " . $producto->getNombre() . "\nPrecio: " . $producto->getPrecio() . "€\nCantidad: " . $producto->getCantidad() . "\n";
            } else {
                $comandaContent = $comandaContent . "Nombre: " . $producto->getNombre() . "\nPrecio: " . $producto->getPrecioElegido() . "€\nCantidad: " . $producto->getCantidad() . "\n";
            }
        }
        $comandaContent = $comandaContent . "El total es: " . $carritoTemp->sacarCuenta() . " €";
        $nombrefichero = "ticket" . date('m-d-Y h:i:s a', time()) . ".txt";
        $nombrefichero = join("_", explode(" ", $nombrefichero));
        $nombrefichero = join("-", explode(":", $nombrefichero));
        $archivo = fopen($nombrefichero, "w");
        fwrite($archivo, $comandaContent);
        fclose($archivo);

        $nombreComanda = "comanda" . date('m-d-Y h:i:s a', time()) . "pendiente.txt";
        $nombreComanda = join("_", explode(" ", $nombrefichero));
        $nombreComanda = join("-", explode(":", $nombrefichero));
        $archivoComanda = fopen($nombreComanda, "w");
        fwrite($archivoComanda, $comandaContent);
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
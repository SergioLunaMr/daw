<?php
if (isset($_POST["pizzas"])) {
    $aux = "";
    $auxpizza = "";
    $preciopizza = 0;
    $nombrepizza = "";
    $tamanopizza = "";
    $pizzas = array();
    foreach ($_POST as $clave => $pizza) {
        if ($pizza != "Añadir al carrito") {
            if (substr($clave, 0, 8) == "quantity") {
                $nombrepizza = substr($clave, 8);
                $cantidadpizza = $pizza;
                $tamano = substr($aux, 0, 1);
                $preciopizza = substr($auxpizza, 1);
                if ($cantidadpizza != "" && $cantidadpizza != "0") {
                    array_push($pizzas, array(
                        "Nombre" => str_replace("_", " ", $nombrepizza),
                        "Cantidad" => $cantidadpizza,
                        "Tamaño" => $tamano,
                        "Precio" => $preciopizza
                    ));
                }

            }
        }
        if ($clave = "size") {
            $aux = $clave;
            $auxpizza = $pizza;
        }
    }
    if (count($pizzas) != 0) {
        $entrada = (int) $_SESSION['entrada'];
        $_SESSION["carrito"][$entrada]=$pizzas;
        $entrada++;
        (int) $_SESSION["entrada"] = $entrada;
    }
} elseif (isset($_POST["bebidas"])) {
    $preciobebida = 0;
    $nombrebebida = "";
    $cantidadbebida = 0;
    $bebidas = array();
    $auxbebida = "";
    foreach ($_POST as $clave => $bebida) {
        if ($bebida != "Añadir al carrito") {
            if (substr($clave, 0, 8) == "quantity") {
                $nombrebebida = substr($clave, 8);
                $cantidadbebida = $bebida;
                $preciobebida = $auxbebida;
                if ($cantidadbebida != "" && $cantidadbebida != "0") {
                    array_push($bebidas, array(
                        "Nombre" => str_replace("_", " ", $nombrebebida),
                        "Cantidad" => $cantidadbebida,
                        "Precio" => $preciobebida
                    ));
                }

            }
        }
        if ($clave = "precio") {
            $auxbebida = $bebida;
        }
    }
    if (count($bebidas) != 0) {
        $entrada = (int) $_SESSION['entrada'];
        $_SESSION["carrito"][$entrada]=$bebidas;
        $entrada++;
        (int) $_SESSION["entrada"] = $entrada;
    }
} elseif (isset($_POST["postres"])) {
    $preciopostre = 0;
    $nombrepostre = "";
    $cantidadpostre = 0;
    $postres = array();
    $auxpostre = "";
    foreach ($_POST as $clave => $postre) {
        if ($postre != "Añadir al carrito") {
            if (substr($clave, 0, 8) == "quantity") {
                $nombrepostre = substr($clave, 8);
                $cantidadpostre = $postre;
                $preciopostre = $auxpostre;
                if ($cantidadpostre != "" && $cantidadpostre != "0") {
                    array_push($postres, array(
                        "Nombre" => str_replace("_", " ", $nombrepostre),
                        "Cantidad" => $cantidadpostre,
                        "Precio" => $preciopostre
                    ));
                }

            }
        }
        if ($clave = "precio") {
            $auxpostre = $postre;
        }
    }
    if (count($postres) != 0) {
        $entrada = (int) $_SESSION['entrada'];
        $_SESSION["carrito"][$entrada]=$postres;
        $entrada++;
        (int) $_SESSION["entrada"] = $entrada;
    }
}

?>
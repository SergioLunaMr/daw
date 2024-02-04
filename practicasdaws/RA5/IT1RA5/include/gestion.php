<?php
$carritoTemp = unserialize($_SESSION["carrito"]);
if (isset($_POST["pizzas"])) {
    for ($i = 0; $i < count($_POST["cantidad"]); $i++) {
        if ($_POST["cantidad"][$i] != "") {
            $pizzaObj = $productosArray["pizzas"][$i];
            $pizzaObj->setTamano($_POST["tamanoPizza"][$i]);
            $pizzaObj->setCantidad($_POST["cantidad"][$i]);
            $carritoTemp->agregarProducto($pizzaObj);
        }
    }
} elseif (isset($_POST["bebidas"])) {
    for ($i = 0; $i < count($_POST["cantidad"]); $i++) {
        if ($_POST["cantidad"][$i] != "") {
            $bebidaObj = $productosArray["bebidas"][$i];
            $bebidaObj->setCantidad($_POST["cantidad"][$i]);
            $carritoTemp->agregarProducto($bebidaObj);
        }
    }
} elseif (isset($_POST["postres"])) {
    for ($i = 0; $i < count($_POST["cantidad"]); $i++) {
        if ($_POST["cantidad"][$i] != "") {
            $postreObj = $productosArray["postres"][$i];
            $postreObj->setCantidad($_POST["cantidad"][$i]);
            $carritoTemp->agregarProducto($postreObj);
        }
    }
}
$_SESSION["carrito"] = serialize($carritoTemp);
<form action='index.php' method='post'>
<?php
$carritoTemp = unserialize($_SESSION["carrito"]);
if ($carritoTemp->getProductosCount() == 0) {
    echo "<p>Tu carrito está vacio. Navega por la página y añade tus productos.</p>";
} else {
    foreach ($carritoTemp->getProductos() as $producto) {
        if (get_class($producto) != "Pizza") {
            $productohtml = "<img src='img/" . $producto->getImagen() . "'>
            <p>Nombre: " . $producto->getNombre() . "</p>
            <p>Precio: " . $producto->getPrecio() . "€</p>
            <p>Cantidad: ". $producto->getCantidad() ."</p>";
            echo $productohtml;
        }
        else {
            $productohtml = "<img src='img/" . $producto->getImagen() . "'>
            <p>Nombre: " . $producto->getNombre() . "</p>
            <p>Precio: " . $producto->getPrecioElegido() . "€</p>
            <p>Cantidad: ". $producto->getCantidad() ."</p>";
            echo $productohtml;
        }
    }
    echo "<p>El total es: " . $carritoTemp->sacarCuenta() . " €";
    echo "<input type='submit' name='pedir' value='Hacer pedido'></form>";
}
?>
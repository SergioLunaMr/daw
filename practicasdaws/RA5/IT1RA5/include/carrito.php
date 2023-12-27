<?php
if ($_SESSION["entrada"] == 0) {
    echo "<p>Tu carrito está vacio. Navega por la página y añade tus productos.</p>";
} else {
    $htmlproducto = "<form action='include/comanda.php' method='post'>";
    $total = 0;
    $comanda="";
    $productoultimo="";
    $contador=0;
    foreach ($_SESSION["carrito"] as $clave => $productos) {
        $arrayaux;
        foreach ($productos as $producto) {
            foreach ($producto as $clave => $valor) {
                switch ($clave) {
                    case "Cantidad":
                        $valor = $valor . " unidad/es.";
                        break;
                    case "Precio":
                        $total += (int) $valor;
                        $valor = $valor . " €.";
                        break;
                    case "Tamaño":
                        switch ($valor) {
                            case "s":
                                $valor = " individual.";
                                break;
                            case "m":
                                $valor = " media.";
                                break;
                            case "l":
                                $valor = " grande.";
                                break;
                        }
                        break;
                }
                $comanda = $comanda . $clave . " : " . $valor . "\n";
                $productoultimo = $productoultimo . $comanda . $clave . " : " . $valor;
                $htmlproducto = $htmlproducto . "<p>" . $clave . " : " . $valor . "<p>";
            }
            if($contador==3){
                $contador=0;
            }
            setcookie($contador,$comanda,time()+3600);
            $contador++;
            $productoultimo="";
        }
    }
    $_SESSION["comanda"]=$comanda;
    $htmlproducto = $htmlproducto . "<p>El total es: " . $total . " €";
    $htmlproducto = $htmlproducto . "<input type='submit' name='pedir' value='Hacer pedido'></form>";
    echo $htmlproducto;
}
?>
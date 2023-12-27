<form action="index.php" method="post">
<?php
foreach($_GLOBALS["productos"]["postres"] as $postre){
    $postrehtml = "<img src='img/". $postre['imagen']."'>
    <p>Nombre: ". $postre['nombre'] ."</p>
    <p>Precio: " . $postre['precio'] . "€</p>
    <input type='hidden' name='precio' value='". $postre['precio'] ."'>
    <p>Cantidad: <input type='number' name='quantity${postre['nombre']}'></p>";
    echo $postrehtml;
}
?>
<input type='submit' name='postres' value="Añadir al carrito"></input>
</form>
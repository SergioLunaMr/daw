<form action="index.php" method="post">
<?php
include("include/gestion.php");
foreach($_GLOBALS["productos"]["bebidas"] as $bebidas){
    $bebidashtml = "<img src='img/". $bebidas['imagen']."'>
    <p>Nombre: ". $bebidas['nombre'] ."</p>
    <p>Precio: " . $bebidas['precio'] . "€</p>
    <input type='hidden' name='precio' value='". $bebidas['precio'] ."'>
    <p>Cantidad: <input type='number' name='quantity${bebidas['nombre']}'></p>";
    echo $bebidashtml;
}
?>
<input type='submit' name='bebidas' value="Añadir al carrito"></input>
</form>
<form action="index.php" method="post">
<?php
include("include/gestion.php");
foreach($productosArray["bebidas"] as $bebidaObj){
    $bebidashtml = "<img src='img/". $bebidaObj->getImagen()."'>
    <p>Nombre: ". $bebidaObj->getNombre() ."</p>
    <p>Precio: " . $bebidaObj->getPrecio() . "€</p>
    <p>Cantidad: <input type='number' name='cantidad[]'></p>";
    echo $bebidashtml;
}
?>
<input type='submit' name='bebidas' value="Añadir al carrito"></input>
</form>
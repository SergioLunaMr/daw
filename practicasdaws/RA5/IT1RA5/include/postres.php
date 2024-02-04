<form action="index.php" method="post">
<?php
include("include/gestion.php");
foreach($productosArray["postres"] as $postreObj){
    $postrehtml = "<img src='img/". $postreObj->getImagen()."'>
    <p>Nombre: ". $postreObj->getNombre() ."</p>
    <p>Precio: " . $postreObj->getPrecio() . "€</p>
    <p>Cantidad: <input type='number' name='cantidad[]'></p>";
    echo $postrehtml;
}
?>
<input type='submit' name='postres' value="Añadir al carrito"></input>
</form>
<form action="index.php" method="post">
<?php
include("include/gestion.php");
foreach($productosArray["pizzas"] as $pizzaObj){
    $pizzahtml = "<img src='img/". $pizzaObj->getImagen() ."'>
    <p>Nombre: ". $pizzaObj->getNombre() ."</p>
    <p>Precios: </p>
    <ul><li>Individual: " . $pizzaObj->getPrecio("individual") . "€</li>
    <li>Media: " . $pizzaObj->getPrecio("media") . "€</li>
    <li>Familiar: " . $pizzaObj->getPrecio("familiar") . "€</li></ul>
    <select name='tamanoPizza[]'>
    <option value='individual'>Individual</option>
    <option value='media'>Media</option>
    <option value='familiar'>Familiar</option>
    </select>
    <p>Cantidad: <input type='number' name='cantidad[]'></p>";
    echo $pizzahtml;
}
?>
<input type='submit' name='pizzas' value="Añadir al carrito"></input>
</form>
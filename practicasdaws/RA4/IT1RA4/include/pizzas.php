<form action="index.php" method="post">
<?php
include("include/gestion.php");
foreach($_GLOBALS["productos"]["pizzas"] as $pizza){
    $pizzahtml = "<img src='img/". $pizza['imagen']."'>
    <p>Nombre: ". $pizza['nombre'] ."</p>
    <p>Precios: </p>
    <ul><li>Individual: " . $pizza['precio']['individual'] . "€</li>
    <li>Media: " . $pizza['precio']['media'] . "€</li>
    <li>Familiar: " . $pizza['precio']['familiar'] . "€</li></ul>
    <select name='size'>
    <option value='s". $pizza['precio']['individual'] ."'>Individual</option>
    <option value='m". $pizza['precio']['media'] ."'>Media</option>
    <option value='l". $pizza['precio']['familiar'] ."'>Familiar</option>
    </select>
    <p>Cantidad: <input type='number' name='quantity${pizza['nombre']}'></p>";
    echo $pizzahtml;
}
?>
<input type='submit' name='pizzas' value="Añadir al carrito"></input>
</form>
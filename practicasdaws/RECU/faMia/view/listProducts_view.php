<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <form action="index.php" method="post">
                    <li class='menu'><button type="submit" name="opcion" value="pizzas">Pizzas</button></li>
                    <li class='menu'><button type="submit" name="opcion" value="bebidas">Bebidas</button></li>
                    <li class='menu'><button type="submit" name="opcion" value="postres">Postres</button></li>
                    <li class='menu ' id="carrito"><button type="submit" name="opcion" value="carrito">Carrito</button>
                    </li>
                </form>
            </ul>
        </nav>
    </header>
    <h1><?php echo $data["product"] ?></h1>
</body>

</html>
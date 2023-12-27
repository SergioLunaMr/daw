<?php
    include("config/config.php");
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="css/style.css">
    <title>Examen 1º Evaluación: UD4 IT4</title>
</head>

<body>
    <h1>faMia</h1>
    <?php
    include("include/menu.php");

    if (isset($_POST["opcion"])) {
        $stringaux = "include/" . $_POST["opcion"] . ".php";
        include($stringaux);
    }
    else {
        include("include/gestion.php");
        include("include/carrito.php");
    }
    include("include/footer.php");
    ?>
</body>

</html>
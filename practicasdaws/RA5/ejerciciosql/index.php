<?php
include("consulta.php");
$conexion = conectadb();
$sql = "";


if (isset($_POST["insertar"])) {
    $sql = "INSERT INTO animales(nombre) VALUES('" . $_POST['nombre'] . "')";
    $resultado = $conexion->query($sql);
}

if (isset($_GET["action"]) && $_GET["action"] == "DEL") {
    $sql = "DELETE FROM animales WHERE id=" . $_GET['id'] . "";
    $resultado = $conexion->query($sql);
}

?>


<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <script src='main.js'></script>
    <title>Ejercicio SQL</title>
</head>

<body>
    <?php
    $sql = "SELECT * from animales";
    $resultado = $conexion->query($sql);
    foreach ($resultado as $key => $valor) {
        echo $valor["nombre"] . "<a href=\"index.php?action=DEL&id=" . $valor['id'] . "\">DEL</a><br>";
    }
    ?>
    <form action="" method="POST">
        Nombre animal: <input type="text" name="nombre"><input type="submit" value="Insertar" name="insertar">
    </form>
</body>

</html>
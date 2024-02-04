<?php
include("config/usuarios.php");

//Iniciamos sesión
session_start();
if (!isset($_SESSION["auth"])) {
    $_SESSION["auth"] = false;
    $_SESSION["user"] = "Invitado";
}
$auth = $_SESSION["auth"];
$user = $_SESSION["user"];

?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <title>Acceso privado</title>
</head>

<body>
    <div>
        <?php
        if ($auth) {
            echo "<h1>Panel de control</h1>";
            echo "<p>Bienvenido. ${user}. <a href='include/closesessionprivado.php'>Salir</a></p>";
        } else {
            echo "<h1>Introduce tus credenciales: </h1>";
            include("include/login_form.php");
        }
        ?>
    </div>
        <?php
        if ($auth) {
            echo "Tus comandas: ";
        };
        ?>

</body>

</html>
<?php
/*
author: Sergio Luna Martín
date: 20/10/2023
*/
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
    <script src='main.js'></script>
    <title>SergioLunaMartín</title>
</head>

<body>
    <h1>Autentificación básica</h1>
    <div>
        <?php
        if ($auth) {
            echo "<p>Bievenido. ${user}. <a href='closesession.php'>Salir</a></p>";
        } else {
            include("include/login_form.php");
        }
        ?>
    </div>
    <nav>
        <?php
        if ($auth) {
            include("include/nav_usuario.php");
        } else {
            include("include/nav_invitado.php");
        }
        ?>
    </nav>
    <h2>Contacto</h2>

</body>

</html>
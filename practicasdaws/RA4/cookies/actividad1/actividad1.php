<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 18/10/2023
 *Escriba una página que permita crear una cookie de duración limitada,
 * comprobar el estado de la cookie y destruirla.
 */
include("config.php");
if (isset($_COOKIE["temporal"])) {
    $html="La cookie temporal no está activa.";
}
else {
    $html="Actualmente la cookie 'temporal' no está activa.";
}

if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
    $password = $_COOKIE["password"];
} else {
    $user = "";
    $password = "";
}
if (isset($_POST["enviar"])) {
    if (isset($_POST["remindme"])) {
        setcookie("user", $_POST["user"], time() + 3600);
        setcookie("password", $_POST["password"], time() + 3600);
    }
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
    <title>Actividad 1: Cookies</title>
</head>

<body>
    <form method="post" action="">
        <?php
        

        ?>
        <label>Crear una cookie: <input type="text" name="user" value="<?php echo $user ?>"></label><br>
        <label>Password:<input type="password" name="password" value="<?php echo $password ?>"></label><br>
        <label>Recordar usuario:<input type="checkbox" name="remindme"></label><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>

</html>
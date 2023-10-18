<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 16/10/2023
 *Actividad guiada: Crear un formulario con Usuario y Contraseña que permita recordarlo. 
 * En caso de que lo recuerde, cargar directamente los datos mediante cookies.
 */
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
        <label>User:<input type="text" name="user" value="<?php echo $user ?>"></label><br>
        <label>Password:<input type="password" name="password" value="<?php echo $password ?>"></label><br>
        <label>Recordar usuario:<input type="checkbox" name="remindme"></label><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>

</html>
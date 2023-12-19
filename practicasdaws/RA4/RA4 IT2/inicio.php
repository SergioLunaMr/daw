<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 11/10/2023
 *Ejercicio 4: Dado el mes y año almacenados en variables, escribir un programa que muestre el
 * calendario mensual correspondiente. Marcar el día actual en verde y los festivos
 * en rojo.
 */
include("lib/functions.php");
session_start();
if (!isset($_SESSION["auth"])) {
    $_SESSION["auth"] = false;
    $_SESSION["user"] = "Invitado";
    $_SESSION["dia"] = date("d");
    $_SESSION["anio"] = date("Y");
    $_SESSION["mes"] = date("n");
    $_SESSION["actual"] = false;
    $_SESSION["tarea"]="";
}
if (isset($_POST["formcalendar"])) {
    $_SESSION["anio"] = $_POST["anio"];
    $_SESSION["mes"] = $_POST["mes"];
    ($_SESSION["mes"] == date("n") && $_SESSION["anio"] == date("Y")) ? $_SESSION["actual"] = true : $_SESSION["actual"] = false;
}


$auth = $_SESSION["auth"];
$user = $_SESSION["user"];
$anio = $_SESSION["anio"];
$mes = $_SESSION["mes"];
$dias = getDias($mes, $anio);
($mes == date("n")) ? $_SESSION["actual"] = true : $_SESSION["actual"] = false;
$diasemana = date('w', strtotime(("1" . "-" . $mes . "-" . $anio)));
$festivos = ["6-1", "7-4", "1-5", "15-8", "12-10", "1-11", "6-12", "8-12", "25-12"];

//Creación del calendario
$html = "<form action='inicio.php' method='post'><table>";
for ($i = 1; $i <= $dias + $diasemana; $i++) {
    if ($i == 1) {
        $html = $html . "<tr>";
    } else if (($i - 1) % 7 == 0) {
        $html = $html . "</tr><tr>";
    }
    if ($i > $diasemana) {
        $html = $html . "<td";
        ($i == date("j") && $_SESSION["actual"]) ? $html = $html . " class='actual'" : "";
        for ($j = 0; $j < count($festivos); $j++) {
            (date($i . "-" . $mes . "-" . $anio) == date($festivos[$j] . "-" . $anio)) ? $html = $html . " class='festivo'" : "";
        }
        $html = $html . "><button value='" . $i - $diasemana . "' name='tarea'>Inserte una tarea...</button>" . date('l', strtotime($i . "-" . $mes . "-" . $anio)) . ": " . $i - $diasemana . "</td>";
    } else {
        $html = $html . "<td>" . date('l', strtotime(($i . "-" . $mes . "-" . $anio))) . "</td>";
    }
}
$html = $html . "</table></form>";

?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" type="text/css" href="actividad5.css">
    <title>Actividad 5: Bucles</title>
</head>

<body>
    <?php
    echo "<h1>Bienvenido a la aplicación calendario:</h1>";
    if ($auth) {
        echo "<p>Bievenido ${user} <a href='closesession.php'>Salir</a></p>";
        echo  "<form action='tarea.php' method='post'><button type='submit' name='devolver'>Recoger tarea</button></form>";
    } else {
        include("include/login_form.php");
    }
    include("include/calendario_form.php");

    echo "<br/>";

    echo $html;

    if(isset($_POST["tarea"])&&$auth){
        $_SESSION["dia"]=$_POST['tarea'];
        echo "<p>Creando tarea para el día: ${_POST['tarea']} del mes ". date('M',strtotime(("1" . "-" . $mes . "-" . $anio))) . "</p>";
        include("include/tarea_form.php");
    }
    if($_SESSION["tarea"]!=""){
        echo "<p>Tus tareas:</p>";
        echo "<p>" . $_SESSION["tarea"] . "</p>";
        $_SESSION["tarea"] = "";
    }
    ?>
</body>

</html>
<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
*/
//foreach.Incluimos la librería de funciones comunes.
include("../lib/functions.php");
//foreach.formenviado es una variable que nos permite saber si se ha pulsado submit una vez o no..
$formenviado = false;
$grupo;
$horarioFinal=array();
//foreach.Comprobamos si el formulario se ha enviado.
if (isset($_POST["enviar"])) {
    //foreach.Seteamos formenviado a true.
    $formenviado = true;
    //foreach.Sacamos el grupo enviado mediante post con el formulario.
    $grupo = $_POST["grupo"];
}
?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Ejercicio 1: Sergio Luna Martín</title>
</head>

<body>
    <h2>Ejercicio 1: Módulos de DAW
        <?php include("../include/cabecera.php"); ?>
        <?php
        //foreach.Si el formulario se ha enviado, recogemos los días del grupo.
        if ($formenviado) {
            $horarioFinal["L"]=horarioDia("L", $grupo);
            $horarioFinal["M"]=horarioDia("M", $grupo);
            $horarioFinal["X"]=horarioDia("X", $grupo);
            $horarioFinal["J"]=horarioDia("J", $grupo);
            $horarioFinal["V"]=horarioDia("V", $grupo);
            
            //foreach.Creamos una variable contador para tener en cuenta la cabecera e incluir los días de la semana
            $contador=0;
            
            foreach($horarioFinal as $clave=>$dias){
            //foreach.Entramos dentro de cada día
                $contador++;
                echo "<div class='dia'>";
                switch($contador) {
                    //foreach.Incluimos el día de la semana
                    case 1: echo "<p>Lunes</p>";break;
                    case 2: echo "<p>Martes</p>";break;
                    case 3: echo "<p>Miércoles</p>";break;
                    case 4: echo "<p>Jueves</p>";break;
                    case 5: echo "<p>Viernes</p>";break;
                }
                for($i=0;$i<count($dias);$i++)
                //Entramos dentro de las horas de cada día y construimos nuestro horario
                {
                    echo "<div class='asignatura'>";
                    echo "<p>". $dias[$i]["asignatura"] . "</p>";
                    echo "<p class='profesor'>". $dias[$i]["profesor"] . "</p>";
                    echo "</div>";
                }
                echo "</div>";
            }
        }
        //foreach.Si no se ha enviado, incluimos el formulario.
        else {
            include("../include/formEjercicio1.php");
        }
        ?>
        <?php include("../include/footer.php"); ?>
</body>

</html>
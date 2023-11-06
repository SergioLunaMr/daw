<div class="container my-4">
    <div class="row my-4">
        <div class="col"><a href="../daws.html">Volver atrás -></a></div>
    </div>
    <div>Código: <a href="https://github.com/SergioLunaMr/Practica2DAWS/blob/master/Ejercicio2.php">GitHub</a></div>
</div>
<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
//Ficha personal con los datos cargados en variables. El resultado debe mostrar una foto personal.
//Cargamos contenido de variables
$nombre = "Sergio";
$apellidos = "Luna Martín";
$telefono = "697389952";
$email = "sergiolunamarti@gmail.com";
$linkedin = "https://es.linkedin.com/in/sergio-luna-martin";
$github = "https://github.com/SergioLunaMr";
$logo = "img/Logo.png";
?>

<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <script src='main.js'></script>
    <title>Portfolio</title>
</head>

<body>
    <div>
        <h2>Datos personales:</h1>
    </div>
    <img src=<?php echo "'$logo'" ?> />
    <h3>Nombre:
        <?php echo "${nombre} ", " ", "${apellidos}" ?>
    </h3>
    <h3>Teléfono:
        <?php echo "${telefono}" ?>
    </h3>
    <h3>Email: <a href="mailto:<?php echo "${email}" ?>">
            <?php echo "${email}" ?>
        </a></h3>
    <h2>Enlaces:</h2>
    <?php
    echo "<h3>Linkedin : " . "<a href='" . "${linkedin}" . "'" . ">Click aquí</a>" . "</h3>";
    echo "<h3>Github : " . "<a href='" . "${github}" . "'" . ">Click aquí</a>" . "</h3>";
    ?>
</body>

</html>

</html>
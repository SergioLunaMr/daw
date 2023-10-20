<?php
//Cargamos contenido de variables
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src='main.js'></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="upbar">Portfolio</div>
    <div class="content">
        <div>
            <h2>Datos personales:</h1>
        </div>
        <img src='<?php echo "${datos['logo']}" ?>'>
        <h3>Nombre:
            <?php echo "${datos['nombre']} ", " ", "${datos['apellidos']}" ?>
        </h3>
        <h3>Teléfono:
            <?php echo "${datos['telefono']}" ?>
        </h3>
        <h3>Email: <a href="mailto:<?php echo "${datos['email']}" ?>">
                <?php echo "${datos['email']}" ?>
            </a></h3>
        <h2>Enlaces:</h2>
        <?php
        foreach ($datos['redessociales'] as $clave => $valor) {
            echo "<h3>${clave} : " . "<a href='" . "${valor}" . "'" . ">Click aquí</a>" . "</h3>";
        }
        ?>
        <div class="divisor"></div>
        <h2>Resumen: </h2>
        <?php echo "${datos['resumen']}"; ?>
        <div class="divisor"></div>
        <h2>Trabajos: </h2>
        <?php echo "${datos['resumen']}"; ?>
        <div class="divisor"></div>
        <h2>Projectos: </h2>
        <?php echo "${datos['resumen']}"; ?>
        <br>
        <?php //incluir php ?>
    </div>
    <div class="divisor"></div>
    <div class="upbar"><a href="../daws.html">Volver atrás -></a></div></div>
</body>

</html>

</html>
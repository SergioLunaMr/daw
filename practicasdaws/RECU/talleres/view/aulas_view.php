<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include '../public/style.css'; ?>
    </style>
    <title>Talleres</title>
</head>

<body>
    <div class="banner">
        <div class="banner-title">
            <h1>Detalles de Aula</h1>
        </div>
        <div class="banner-perfil">Bienvenido, <?php echo $_SESSION["PerfilUsuario"]["Nombre"]; ?></div>
        <a href="/">
            <div class="banner-home">Volver a Inicio</div>
        </a>
        <?php
        if ($_SESSION["PerfilUsuario"]["Perfil"] == "Profesor") {
            echo "<a href='/admin'><div class='admin-button'>Panel de Administrador</div></a>";
        }
        if ($_SESSION["PerfilUsuario"]["Perfil"] == "Invitado") {
            echo "<a href='/login'><div class='login-button'>Iniciar sesión</div></a>";
        } else {
            echo "<a href='/logout'><div class='logout-button'>Desconectarse</div></a>";
        }
        ?>
    </div>
    <div class="banner-title">
        <h2>Código Aula: <?php echo $data[1][0]["codigo"]?></h2>
    </div>
    <div class="aula-parent">
    <?php
    foreach ($data[0] as $key => $value) {
        $html = "<div class='aula-container'>" .
            "<div class='equipo-puesto'Puesto:" .
        $value["puesto"] .
            "</div>" .
            "<div class='equipo-codigo'>Código: " .
        $value["codigo"] .
            "</div>" .
            "<div class='equipo-descripcion'>Descripción: " .
        $value["descripcion"] .
            "</div>" .
            "<div class='equipo-referencia'>Referencia: " .
        $value["referencia_JA"] .
            "</div>" .
            "<div class='equipo-imagen'>" .
        $value["imagen"] .
            "</div>" .
            "<div class='equipo-estado'>Estado: " .
        $value["estado"] .
            "</div>" .
            "</div>";
        // "<div>".
        //  "<a href='/aula/edit/". $value["id"] ."'>EDITAR</a><br>".
        //  "<a href='/aula/delete/". $value["id"] ."'>BORRAR</a>".
        // "</div>";
        echo $html;
    }
    ?>
    </div>
</body>

</html>
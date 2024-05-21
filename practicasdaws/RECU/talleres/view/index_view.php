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
            <h1>Gestión de Aulas</h1>
        </div>
        <div class="banner-perfil">Bievenido, <?php echo $_SESSION["PerfilUsuario"]["Nombre"]; ?></div>
        <?php
        if ($_SESSION["PerfilUsuario"]["Perfil"] == "Profesor") {
            echo "<a href='/admin'><div class='admin-button'>Panel de Administrador</div></a>";
        }
        if ($_SESSION["PerfilUsuario"]["Nombre"] == "Invitado") {
            echo "<a href='/login'><div class='login-button'>Iniciar sesión</div></a>";
        } else {
            echo "<a href='/logout'><div class='logout-button'>Desconectarse</div></a>";
        } ?>
    </div>
    <div class="banner-title">
        <h2>Listado de Aulas</h2>
    </div>
    <!-- <p><a href='/aula/add/form'>AÑADIR AULA</a></p> -->
    <div class="aula-parent">
    <?php
    foreach ($data as $key => $value) {
        $html = "<a href='/aula/details/" . $value["id"] .
            "'><div class='aula-container'>
            <div class='aula-name'>Código: " .
            $value["codigo"] .
            "</div>" .
            "<div class='aula-mesas'>Mesas: " .
            $value["numero_mesas"] .
            "</div>" .
            "<div class='aula-grupo'>Grupo: " .
            $value["descripcion_grupo"] .
            "</div>" .
            "</div></a>";
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
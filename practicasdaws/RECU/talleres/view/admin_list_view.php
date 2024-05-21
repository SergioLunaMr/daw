<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include '../public/style.css'; ?>
    </style>
    <title>Admin</title>
</head>

<body>
    <div class="banner">
        <div class="banner-title">
            <h1>Panel de control de administrador</h1>
        </div>
        <div class="banner-perfil">Bienvenido, <?php echo $_SESSION["PerfilUsuario"]["Nombre"]; ?></div>
        <a href="/">
            <div class="banner-home">Volver a Inicio</div>
        </a>
        <?php
        if ($_SESSION["PerfilUsuario"]["Nombre"] == "Invitado") {
            echo "<a href='/login'><div class='login-button'>Iniciar sesión</div></a>";
        } else {
            echo "<a href='/logout'><div class='logout-button'>Desconectarse</div></a>";
        } ?>
    </div>
    <?php
    //Si el usuario no tiene perfil de profesor, se redirige al índice.
    if ($_SESSION["PerfilUsuario"]["Perfil"] != "Profesor") {
        header("Location: /");
    }
    ?>
    <main>
        <div class="panel-control">
        <a href="/admin/aulas"><div class="panel-control-option">Aulas</div></a>
        <a href="/admin/equipos"><div class="panel-control-option">Equipos</div></a>
        <a href="/admin/grupos"><div class="panel-control-option">Grupos</div></a>
        <a href="/admin/alumnos"><div class="panel-control-option">Alumnos</div></a>
        <a href="/admin/incidencias"><div class="panel-control-option">Incidencias</div></a>
        <a href="/admin/reservas"><div class="panel-control-option">Reservas</div></a>
        <a href="/admin/ubicaciones"><div class="panel-control-option">Ubicaciones</div></a>
        </div>
        <div class="panel-control-cambios">
            <?php
            $html=""; 
            $contador=0;
            foreach($data[0] as $key => $valor ){
                $html.="<div><h2>".++$contador."</h3>";
                foreach ($valor as $key => $value) {
                    $html.="<div>".$key. " = " . $value . "</div>";
                }
                $html.="</div>";
            }
            echo $html;
            ?>
        </div>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include '../public/style.css'; ?>
    </style>
    <title>Acceso a cuenta</title>
</head>

<body>
    <div class="banner">
        <div class="banner-title">
            <h1>Acceso a cuenta</h1>
        </div>
        <a href="/">
            <div class="banner-home">Volver a Inicio</div>
        </a>
    </div>
    <?php
    //Si ya hay un usuario logueado, se redirige al índice.
    if ($_SESSION["PerfilUsuario"]["Perfil"] != "Invitado") {
        header("Location: /");
    }
    //Se comprueba que no ha habido inicio de sesión previo dado que es la primera vez que se ha entrado.
    if (count($data) > 1) {
        //Se comprueba que, ha habido un intento de inicio de sesión y la base de datos ha encontrado coincidencia.
        if ($data[1]) {
            //Se indica el nombre del usuario
            $_SESSION["PerfilUsuario"]["Nombre"] = $data[1][0]["nombre"];
            //Si hay más de 4 campos, quiere decir que se trata de un usuario tipo alumno
            if (count($data[1][0]) > 4) {
                //Se comprueba que es alumno activo o no
                $data[1][0]["activo"] ? $_SESSION["PerfilUsuario"]["Perfil"] = "AlumnoActivo" : $_SESSION["PerfilUsuario"]["Perfil"] = "Alumno";
                //Si no tiene más de 4 campos, es un profesor y se loguea con perfil de profesor
            } else {
                $_SESSION["PerfilUsuario"]["Perfil"] = "Profesor";
            }
            //Después del logueo, redireccionamos al índice.
            header("Location: /");
        }
    }
    //Si ha habido un intento de sesión, es decir, el controlador nos envía una flag indicando que ha realiado la loginAction, indicamos al usuario que se ha equivocado.
    if ($data[0]["Intento"] == TRUE) {
        $sesionFallida = "<div class='fallo-sesion'>Fallo en el inicio de sesión. Introduce nuevamente tus datos.</div>";
        echo $sesionFallida;
    }
    ?>
    </div>
    <div class="login-form">
        <form action="/login" method="get">
            <div><label class="label-form" for="usuario">Nombre de usuario:</label></div>
            <div><input class="input-form" id="usuario" type="text" name="usuario"></div>

            <div><label class="label-form" for="password">Contraseña: </label></div>
            <div><input class="input-form" id="password" type="password" name="password"></div>

            <input type="submit" value="Iniciar sesión">
        </form>
    </div>

</body>

</html>
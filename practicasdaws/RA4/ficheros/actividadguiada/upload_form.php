<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 30/10/2023
 *Actividad guiada: Crear un formulario que permita subir ficheros.
 *Formulario para subir un fichero.
 */
?>
<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='author' content='SergioLunaMartín'>
<title>Actividad guiada de Ficheros</title>
</head>
<body>
    <h2>Subida de ficheros</h2>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file">FICHERO: </label>
        <input type="file" name="file" id="file"/><br/>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <h2>Galería de imágenes</h2>
    <?php
    $directorio = "upload/";
    $archivos = scandir($directorio);
    foreach ($archivos as $archivo) {
        if ($archivo == "."|| $archivo == "..") continue;
            echo "<img src='upload/$archivo'>";
        }
    ?>
</body>
</html>
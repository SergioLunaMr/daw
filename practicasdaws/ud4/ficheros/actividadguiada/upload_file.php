<?php
/** 
 *@author: Sergio Luna Martín
 *Date: 30/10/2023
 *Actividad guiada: Crear un formulario que permita subir ficheros.
 *Obtiene fichero y lo guarda.
 */
if (!isset($_POST["enviar"])) {
    header("location: upload_form.php");
}
define("DIR_UPLOAD", "upload/");
define("MAX_SIZE", "20000000");
$extensions = array("gif", "jpg", "png", "jpeg");
$format = array("image/jpg", "image/png", "image/jpeg", "application/pdf");
$aux = explode(".", $_FILES["file"]["name"]);
$ext = end($aux);
if ($_FILES["file"]["size"] <= MAX_SIZE && in_array($ext, $extensions) && in_array($_FILES["file"]["type"], $format)) {
    if($_FILES["file"]["error"]>0){
        echo "Se ha producido un error: " . $_FILES["file"]["error"];
    }
    else {
        $file_name = uniqid() .".".pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        if(file_exists(DIR_UPLOAD . $file_name)) {
            echo "Se ha producido un error el fichero ya existe.";
        }
        else {
            move_uploaded_file($_FILES["file"]["tmp_name"], DIR_UPLOAD . $file_name);
            echo "Se ha subido el fichero y se ha almacenado en upload/";
        }
    }
}
else {
    echo "Se ha producido un error, tamaño o formato incorrecto.";
}
echo "<a href='upload_form.php'>Volver</a>";
?>
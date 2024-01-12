<?php 
/**
 * Ejemplo sin fichero wsd
 */

 function getMensaje($nombre) {
    return "Hola" . $nombre;
 }

 //Opciones del servidor
 $opciones = array('uri'=>"http://localhost/daw/practicasdaws/RA7/ejemploserviciosoap/server.php");

 //Crear nuevo servidor SOAP
 $server = new SoapServer(null, $opciones);
 $server->addFunction("getMensaje");
 $server->handle();
 ?>
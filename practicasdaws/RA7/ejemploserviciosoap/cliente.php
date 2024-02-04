<?php

$opciones = array('location' => "http://localhost/daw/practicasdaws/RA7/ejemploserviciosoap/server.php",
            'uri' => "http://localhost/daw/practicasdaws/RA7/ejemploserviciosoap/server.php");
try {
    //Crea un cliente SOAP
    $cliente = new SoapClient(null, $opciones);

    //Llamar a la función del servidor
    $respuesta = $cliente->getMensaje("Sergio");
    echo $respuesta;
}
catch (SoapFault $e) {
    //Manejo de errores
    echo $e->getMessage();
}
?>
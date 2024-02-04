<?php
ini_set("soap.wsdl_cache_enabled", false);
try {
    //Crea un cliente SOAP
    $cliente = new SoapClient("http://localhost/daw/practicasdaws/RA7/ejemploserviciosoap2/greetings.wsdl");

    echo $cliente->sayHello("Sergio");
    echo $cliente->sayGoodBye("Sergio");
}
catch (SoapFault $e) {
    //Manejo de errores
    echo $e->getMessage();
}
?>
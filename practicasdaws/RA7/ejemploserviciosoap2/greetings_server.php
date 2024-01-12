<?php 
/**
 * Ejemplo sin fichero wsd
 */
class GreetingServer {
   function sayHello($nombre) {
      return "Hello " . $nombre;
   }
  
   function sayGoodBye($nombre) {
     return "Goodbye " . $nombre;
  }
}

 //Crear nuevo servidor SOAP
 $server = new SoapServer("http://localhost/daw/practicasdaws/RA7/ejemploserviciosoap2/greetings.wsdl");
 $server->setClass(GreetingServer::class);
 $server->handle();
 ?>
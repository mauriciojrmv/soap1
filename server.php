<?php
// Definir la clase que contiene los métodos del servicio SOAP
class HelloWorldService {
    public function sayHello($name) {
        return "Hola, " . $name . "!";
    }
}

// Crear el servidor SOAP
$server = new SoapServer(null, ['uri' => "http://localhost:8000/soap/server.php"]);

// Asignar la clase al servidor SOAP
$server->setClass('HelloWorldService');

// Procesar las solicitudes SOAP
$server->handle();
?>

<?php
try {
    // Crear un cliente SOAP y conectar con el servidor
    $client = new SoapClient(null, [
        'location' => "http://localhost:8000/soap/server.php",
        'uri' => "http://localhost:8000/soap/server.php",
        'trace' => 1 // Habilita la depuración
    ]);

    // Llamar al método 'sayHello' en el servidor SOAP
    $response = $client->sayHello("Mundo");
    echo $response;
} catch (SoapFault $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}
?>

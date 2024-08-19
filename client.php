<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $newMessage = htmlspecialchars($_POST['message']); 
        
        try {
            // Cambia la IP y puerto aquí
            $client = new SoapClient(null, [
                'location' => "http://192.168.1.6:8000/soap/server.php",
                'uri' => "http://192.168.1.6:8000/soap/server.php",
                'trace' => 1
            ]);

            // Enviar el mensaje personalizado al servidor
            $response = $client->setMessage($newMessage);
            echo $response . "<br>";

            // Obtener el mensaje actualizado del servidor
            $currentMessage = $client->getMessage();
            echo "El mensaje del servidor es: " . $currentMessage;
        } catch (SoapFault $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Por favor, introduce un mensaje.";
    }
}
?>

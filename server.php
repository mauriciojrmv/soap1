<?php
class HelloWorldService {
    private $message = "Hola Mundo!";

    public function setMessage($newMessage) {
        $this->message = $newMessage;
        return "El mensaje es: " . $this->message;
    }

    public function getMessage() {
        return $this->message;
    }
}

// Cambia la IP y puerto a la IP externa y puerto donde corre Apache
$server = new SoapServer(null, ['uri' => "http://192.168.1.6:8000/soap/server.php"]);
$server->setClass('HelloWorldService');
$server->handle();
?>

Clase SOAP en PHP
Se utilizan las clases integradas SoapServer y SoapClient.

Implementación:
Servidor: Usamos la clase SoapServer para crear el servidor SOAP.
Cliente: Usamos la clase SoapClient para conectar con el servidor y enviar solicitudes.

Métodos Expuestos:
Requisito: Un servicio SOAP debe exponer uno o varios métodos que puedan ser invocados por un cliente remoto.

Implementación:
Hemos definido la clase HelloWorldService con el método sayHello($name), que es el método expuesto a través de SOAP. Este método acepta un argumento ($name) y devuelve un mensaje de saludo.

Servidor SOAP:
Requisito: El servidor SOAP debe estar preparado para recibir solicitudes SOAP, procesarlas y devolver una respuesta al cliente.
Implementación:
Instanciación: Creamos una instancia de SoapServer con la configuración adecuada.
Asignación de Métodos: Usamos el método setClass para que el servidor SOAP sepa que debe utilizar la clase HelloWorldService para procesar las solicitudes.
Manejo de Solicitudes: El método handle() se encarga de recibir las solicitudes SOAP y ejecutar el método correspondiente en la clase HelloWorldService.

Cliente SOAP:
Requisito: Un cliente SOAP debe poder conectarse al servidor SOAP, enviar una solicitud y recibir la respuesta.
Implementación:
Instanciación: Creamos un SoapClient sin WSDL (modo nulo) y le indicamos la ubicación y URI del servidor.
Llamada al Método: El cliente SOAP llama al método sayHello con el argumento "Mundo", y recibe la respuesta del servidor.

Protocolo SOAP sobre HTTP:
Requisito: SOAP suele utilizar HTTP como protocolo de transporte, aunque también puede usar otros protocolos como SMTP.
Implementación:
Tanto el servidor como el cliente SOAP están configurados para utilizar HTTP. Esto es implícito al definir la URI y la ubicación del servidor con URLs que usan el esquema http://192.168.1.6:8000/soap/


Para probar el codigo insertar esta carpeta en xampp htdocs y correr "http://192.168.1.6:8000/soap/index.html" en su buscador el puerto que estoy ocupando es el 8000 y la ip es la que tengas en ipque tengams asignada debes cambiar el puerto de tu xampp apache a este mismo y la ip dependiendo

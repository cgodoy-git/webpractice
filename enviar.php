<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$correo = $_POST['tel'];
$mensaje = $_POST['mensaje'];
$para = "cristiangodoy2011@gmail.com";
$asunto = "Contacto desde página web";
$cuerpo = "<h1>Contacto</h1><img src='https://i.ytimg.com/vi/cFnH5nhSMcI/maxresdefault.jpg' style='width:30%'><br><strong>Los datos recibidos son:</strong><br><p>Nombre: " . $nombre . "</p><p>Correo: " . $correo . "</p><p>Mensaje: " . $mensaje . "</p>";
$cabecera = "From:" . $para . "\r\n";
$cabecera .= "MIME-Version: 1.0\r\n";
$cabecera .= "Content-Type: text/html; charset=UTF-8\r\n";
if (mail($para, $asunto, $cuerpo, $cabecera)) {
    echo "Correo enviado correctamente";
} else {
    echo "Error - Correo no enviado!";
}

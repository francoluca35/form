<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "francolucap1@gmail.com"; // Reemplaza con tu dirección de correo Gmail
    $asunto = "Nuevo mensaje de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje: $mensaje\n";

    if (mail($destinatario, $asunto, $contenido)) {
        header("Location: formulario.html?enviado=1");
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo nuevamente.";
    }
}
?>

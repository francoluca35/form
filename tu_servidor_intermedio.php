<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "francolucap1@gmail.com";
    $asunto = "Mensaje desde el formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje: $mensaje\n";

    if (mail($destinatario, $asunto, $contenido)) {
        http_response_code(200); // Respuesta exitosa
    } else {
        http_response_code(500); // Error en el servidor
    }
} else {
    http_response_code(400); // Solicitud incorrecta
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $destinatario = "gabriel_arturo01@.com"; // Reemplaza con tu dirección de correo electrónico

  $asunto = "Nuevo mensaje de contacto desde el portafolio";
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo electrónico: $correo\n";
  $contenido .= "Mensaje: $mensaje\n";

  $headers = "From: $nombre <$correo>";

  if (mail($destinatario, $asunto, $contenido, $headers)) {
    echo "¡Gracias por tu mensaje! Pronto te contactaré.";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.";
  }
}
?>

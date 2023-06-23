<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $destinatario = 'gabriel_arturo01@hotmail.com';
  $asunto = 'Nuevo mensaje del formulario de contacto';

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo: $correo\n";
  $contenido .= "Mensaje:\n$mensaje\n";

  $cabeceras = "From: $nombre <$correo>\r\n";
  $cabeceras .= "Reply-To: $correo\r\n";
  $cabeceras .= "MIME-Version: 1.0\r\n";
  $cabeceras .= "Content-type: text/plain; charset=utf-8\r\n";
  $cabeceras .= "X-Mailer: PHP/" . phpversion() . "\r\n";

  // Configuración de autenticación SMTP para Hotmail (Outlook)
  $smtpHost = 'smtp.live.com';
  $smtpPort = 587;
  $smtpUsername = 'gabriel_arturo01@hotmail.com';
  $smtpPassword = 'Eltury832931420';

  // Configurar opciones adicionales para la función mail
  $mailOptions = "-f $smtpUsername";

  if (mail($destinatario, $asunto, $contenido, $cabeceras, $mailOptions)) {
    echo 'El mensaje se envió correctamente. Gracias por contactarnos.';
  } else {
    echo 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
  }
} else {
  echo 'Error al procesar el formulario.';
}
?>

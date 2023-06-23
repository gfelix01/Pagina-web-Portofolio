<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $destinatario = 'Gabriel_arturo01@hotmail.com';
  $asunto = 'Nuevo mensaje del formulario de contacto';

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo: $correo\n";
  $contenido .= "Mensaje:\n$mensaje\n";

  $cabeceras = "From: $nombre <$correo>\r\n";
  $cabeceras .= "Reply-To: $correo\r\n";

  if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
    echo 'El mensaje se envió correctamente. Gracias por contactarnos.';
  } else {
    echo 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
  }
} else {
  echo 'Error al procesar el formulario.';
}
?>

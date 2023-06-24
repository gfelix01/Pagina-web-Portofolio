<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];

  $para = "gabriel_arturo01@hotmail.com"; // Reemplaza con tu dirección de correo electrónico
  $asunto = "Mensaje de contacto de mi portafolio";
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Correo: " . $correo . "\n";
  $cuerpo .= "Mensaje: " . $mensaje . "\n";

  // Envía el correo
  if (mail($para, $asunto, $cuerpo)) {
    echo "Mensaje enviado correctamente. Gracias por contactarme, " . $nombre . "!";
  } else {
    echo "Error al enviar el mensaje. Por favor, inténtalo nuevamente.";
  }
}
?>

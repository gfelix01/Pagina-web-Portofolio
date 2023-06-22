<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Configurar los detalles del correo electrónico
  $destinatario = "gabriel_arturo01@hotmail.com"; // Dirección de correo electrónico del destinatario
  $asunto = "Nuevo mensaje del formulario de contacto";
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Email: " . $email . "\n";
  $cuerpo .= "Mensaje: " . $mensaje;

  // Enviar el correo electrónico
  $resultado = mail($destinatario, $asunto, $cuerpo);

  if ($resultado) {
    // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
    header("Location:enviar.html");
    exit();
  } else {
    // Ocurrió un error al enviar el correo electrónico
    echo "Ha ocurrido un error al enviar el mensaje.";
  }
}
?>

<?php
$to = "gabriel_arturo01@hotmail.com";
$subject = "Prueba de correo";
$message = "Este es un correo de prueba enviado desde XAMPP.";
$headers = "gabriel_arturo01@hotmail.com";

if (mail($to, $subject, $message, $headers)) {
  echo "Correo enviado correctamente.";
} else {
  echo "Error al enviar el correo.";
}
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Aquí puedes realizar las acciones necesarias con los datos recibidos, por ejemplo, enviar un correo electrónico

  // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
  header("Location: confirmacion.html");
  exit();
}
?>

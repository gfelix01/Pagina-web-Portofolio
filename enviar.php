<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ruta al archivo autoload de PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $destinatario = "gabriel_arturo01@hotmail.com"; // Reemplaza con tu dirección de correo electrónico

  $asunto = "Nuevo mensaje de contacto desde el portafolio";
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo electrónico: $correo\n";
  $contenido .= "Mensaje: $mensaje\n";

  $mail = new PHPMailer(true);

  try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gabriel_arturo01"hotmail.com'; // Reemplaza con tu dirección de correo electrónico
    $mail->Password = 'Eltury832931420'; // Reemplaza con tu contraseña de correo electrónico
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configuración del mensaje
    $mail->setFrom($correo, $nombre);
    $mail->addAddress($destinatario);
    $mail->Subject = $asunto;
    $mail->Body = $contenido;

    $mail->send();

    echo "¡Gracias por tu mensaje! Pronto te contactaré.";
  } catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.";
  }
}
?>

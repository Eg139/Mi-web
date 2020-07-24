<?php
if (isset($_POST['nombre']))
$nombre = $_POST['nombre'];
if (isset($_POST['email']))
$email= $_POST['email'];
if (isset($_POST['mensaje']))
$mensaje = $_POST['mensaje'];
if (isset($_POST['asunto']))
$asunto = $_POST['asunto'];

$content="From: $nombre \n Email: $email \n Message: $mensaje";
$recipient = "eric.guzman.139@gmail.com";
$mailheader = "From: $email \r\n ";
mail($recipient, $asunto, $content, $mailheader) or die("Error!");
echo "Email sent";
?>
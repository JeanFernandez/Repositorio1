<?php

$nombre = $_POST['first_name'];
$correo = $_POST['email'];
$mensaje= $_POST['message'];

$header = 'From :' . $correo . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version : 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su e-mai; es " . $correo . " \r\n";
$mensaje = "Mensaje : " . $_POST['message'] . " \r\n";
$mensaje = "Enviado el " . date('d/m/y', time());

$para = 'fernandez.munoz.jean@gmail.com';
$asunto = 'Mensaje de mi sitio web';

if(mail($para,$asunto, utf8_decode($mensaje),$header))
  echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');
        </script>";
  echo"<script type='text/javascript'>window.location.href='http://www.niños-psiquicos.com/index.html';
        </script>";

?>
 
 
 

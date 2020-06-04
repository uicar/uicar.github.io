<?php

$mensaje = $_GET['mensaje'];
$titulo = $_GET['titulo'];
$email = $_GET['email'];
$nombre = $_GET['nombre'];


$final = $nombre . ' ' . $titulo . ' ' . ' ' . $email . ' ' . $mensaje ;



$to      = 'davidl.barrero@gmail.com';
$subject = 'Mensaje de contacto';
$message =  $final ;


mail('davidl.barrero@gmail.com', $subject, $message);

header("Location: http://uicar.io/contact.html");




?> 
<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['agenciadeviajes'])     ||
   empty($_POST['dia'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$agenciadeviajes = strip_tags(htmlspecialchars($_POST['agenciadeviajes']));
$dia = strip_tags(htmlspecialchars($_POST['dia']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'josepmariacampanya@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Jornadas Profesionales de Andalucía 2019:  $name";
$email_body = "Has recibido un mensaje de la web Jornadas Profesionales 2019.\n\n"."Aquí los detalles:\n\nNombre y Apellido: $name\n\nEmail: $email_address\n\nAgencia de Viajes: $agenciadeviajes\n\nDía: $dia\n\nTelefono: $phone\n\nComentarios:\n$message";
$headers = "From: noreply@theflashglobal.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>

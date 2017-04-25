<?php 

$recoverEmail = $_GET['email'];
$recoverPassword = $_GET['password'];





echo $recoverEmail;

$to      = $recoverEmail;
$subject = 'Your recovered password';
$message = 'hello your recovered password is';
$headers = 'From: petloversk@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



?> 
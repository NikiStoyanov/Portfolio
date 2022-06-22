<?php
$receiving_email_address = 'nikistoyanov2005@gmail.com';
$name = @trim(stripslashes($_POST['name']));
$from = @trim(stripslashes($_POST['email']));
$subject = @trim(stripslashes($_POST['subject']));
$message = @trim(stripslashes($_POST['message']));


$headers   = '';
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
$headers .= "From: {$name} <{$from}>" . "\r\n";
$headers .= "Reply-To: <{$from}>" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

mail($receiving_email_address, $subject, $message, $headers);
header("Location:https://nikistoyanov.github.io/Portfolio/");

exit;

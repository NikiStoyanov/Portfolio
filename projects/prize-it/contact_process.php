<?php
$to   		= 'itotlichnik2018.2019@gmail.com';
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email']));  
$message    = @trim(stripslashes($_POST['message'])); 


$headers   = '';
$headers .= "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "X-Mailer: PHP/".phpversion();

mail($to, $message, $headers);
header("Location:http://prizeit.000webhostapp.com/#contact"); 

die;
?>


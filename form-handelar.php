<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@primeuniversity.edu.bd';
$email_subject = 'New form Submission';

$email_body = "user name: $name.\n".
                "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message.\n";
$to = '999mominur@gmail.com';
$header = "From:$email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");


?>
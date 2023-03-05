<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'HAO0001@jmss.vic.edu.au';

$email_subject = 'Procrastination Website Submission'

$email_body = 
"Name: $name.\n".
"Email: $visitor_email.\n".
"Subject: $subject.\n".
"Message: $message.\n";

$to = 'HAO0001@jmss.vic.edu.au';

$headers = "From: $email_from \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
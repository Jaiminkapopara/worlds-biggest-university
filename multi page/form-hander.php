<?php
$name = $_POST['name'];
$visiter_mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$_email_subject = 'new form submission';

$email_body = "user name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message .\n";

$to = 'avinash6252@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");





?>
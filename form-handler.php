<?php
$name = $_POST('name');
$visitor_email = $_POST('email');
$subject = $_POST('subject');
$message = $_POST('message');

//Domain Name
$email_from = 'abcd1@YourWebsite.com';

//subject
$email_subject = 'Form Submission';

//body
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";


//Developer Email id
$to = 'velocity1234@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact us.html");

?>
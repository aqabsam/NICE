<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['Subject'];
$messaqge = $_POST['message'];

$email_form ='aqabsami99@gmail.com';
$email_subject ='New Form Submission';
$email_subject="User Name: $name./n".
             "User Email: $visitor_email./n".
             "Subject: $subject./n".
"User message: $messaage ./n".
$to = 'aqabsami99@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n"
mail($to,$email_subject,$email_subject,$headers);
header("Loaction: contact.html")
?>
<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='nikhilmudumba2458@gmail.com';
$email_subject='new form submission';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User message: $message.\n";
$to='nikhilmudumba703@gmail.com';
$headers="From: $email_from \r\n"
$headers .="reply_to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
 


?>
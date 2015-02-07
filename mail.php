<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$animals = $_POST['animals'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Message: $message";
$recipient = "bvbrandonbv@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>

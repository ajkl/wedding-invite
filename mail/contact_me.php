<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['message']))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'kaleajinkya@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nMessage:\n$message";
$headers = "From: kaleajinkya@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;
?>

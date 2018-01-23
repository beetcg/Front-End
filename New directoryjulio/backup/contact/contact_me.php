<?php
	if(empty($_POST['name'])  	||
   empty($_POST['email']) 		||  empty($_POST['phone']) 		|| empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['phone'];
$sub = $_POST['subject'];
	
// create email body and send it	
$to = 'mariandreinagv@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact Form:  $name";
$email_body = "You have received a new message from BEETCG contact form.\n\n"."Here are the        
details:\n\nName: $name\n\nPhone: $tel\n\nEmail: $email_address\n\nSubject: $sub\nMessage:\n$message";
$headers = "From: noreply@beetcg.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;            
?>		

?>
<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'tim.pijpops@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "wimpijpops.be contactformulier:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Nieuw bericht ontvangen van de website.\n\n"."Hier zijn de details:\n\nNaam: $name\n\nTelefoon: $phone\n\nE-mail: $email_address\n\nBericht:\n$message";
$headers = "Van: noreply@wimpijpops.be\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>

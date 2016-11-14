<?php
  // Check for empty fields
  if(empty($_POST['name'])  		||
     empty($_POST['email']) 		||
     empty($_POST['phone']) 		||
     empty($_POST['message'])	||
     !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
     {
  	echo "No arguments Provided!";
     }
  else{
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    // Create the email and send the message
    $to = 'kevin.hassan13400@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Formulaire de contact Naïade:  $name";
    $email_body = "Vous avez reçu un nouveau message via le formulaire de votre site Naïade.\n\n"."Les détails du message:\n\Nom: $name\n\nEmail: $email_address\n\Telephone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@naiade.herokuapp.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Répondre à : $email_address";
    mail($to,$email_subject,$email_body,$headers);
  }
    header("Location: /");
?>

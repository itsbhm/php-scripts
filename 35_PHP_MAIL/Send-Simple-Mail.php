<?php 

$to = "recv@domain.com";
$subject = "Your_Subject_Here";
$message = "This mail is build or send using php codes.";
$headers = "From: FirstName LastName<noreply@domain.com>";
if(mail($to, $subject, $message, $headers)){

	echo "Thanks for Sending us mail. We will contact shortly.";
}
else{

	echo "Please try again later!";
}
?>
<?php

date_default_timezone_set("Asia/Kolkata");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Classes
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // DEBUG_SERVER //DEBUG_OFF
    $mail->isSMTP();
    $mail->Host       = 'smtp.domain.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '< username || email >';
    $mail->Password   = '< password >';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    
    //E-Mail Priority
    // $mail->Priority = 1;
    
    //Recipients
    $mail->setFrom('no-reply@domain.com', 'Sender');
    $mail->addAddress('recipient@domain.com', 'Recipient');  // Add a recipient (Name is optional)
    // $mail->addAddress('ellen@domain.com');               // Add a recipient (Name is optional)
    // $mail->addReplyTo('info@domain.com', 'Information');
    // $mail->addCC('cc@domain.com');
    
    // Content
    $mail->isHTML(true);    // Set email format to HTML
    $mail->Subject = 'Email From Sender';
    $mail->Body    = 'This is email Body.';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

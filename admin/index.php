<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'phpmailer/PHPMailerAutoload.php';
$email = "test@gmail.com";
$name = 'test name';
$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->Port = 465; 					 // TCP port to connect to
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'ssl'  ;                          // Enable TLS encryption, `ssl` also accepted
$mail->Username = 'it@grouppnb.com';                 // SMTP username
$mail->Password = 'PNBgroup08#';                           // SMTP password
$mail->setFrom($email, $name);
$mail->addAddress('ravinder.acs@gmail.com', 'CC name');     // Add a recipient
$mail->addAddress('it@grouppnb.com');               // Name is optional
$mail->addReplyTo('no_reply@grouppnb.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Website User Contact';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
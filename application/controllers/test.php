<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'showrov016@gmail.com';                 // SMTP username
$mail->Password = 'Blackunicorn016';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->SMTPDebug = 2;
$mail->setFrom('no-reply@tuitionart.com', 'Admin');
$mail->addAddress('showrov.rayhan@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('Dhaka');               // Name is optional

   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Test Mail';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->addAttachment('s.jpg');

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo $Main->ErrorInfo;
}
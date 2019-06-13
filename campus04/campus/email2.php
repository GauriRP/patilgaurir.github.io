<?php

require_once('phpmailer/class.phpmailer.php');
require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.smtp.php';
$mail = new PHPMailer();

$mail->isSMTP();



$mail->Host = 'relay-hosting.secureserver.net';
$mail->SMTPAuth = false;


$mail->Username = 'patilrutuja369@gmail.com';//sender email id
$mail->Password = 'Swapnil1992#';

$mail->SMTPSecure = false;
$mail->Port = 25;

$mail->Subject = 'Complaint';

$mail->Body = 'Hello this is rutu';//'Hello Akshay this is some body';

$mail->setFrom('patilrutuja369@gmail.com','From: Rutu');//sender email id

$mail->addAddress('patilrutuja369@gmail.com');//receiver email id


if ($mail->send())
    echo "your Mail sent ".$mail->ErrorInfo;
     
else 
	echo "not sent ur mail ".$mail->ErrorInfo;
?>
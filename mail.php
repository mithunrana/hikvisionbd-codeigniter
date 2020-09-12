<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	$mail->HOST = 'smpt.gmail.com';
	$mail->SMTMAuth = 'true';
	$mail->Username = 'mithunrana139@gmail.com';
	$mail->Password = 'mababa1234';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->setFrom('noreply@hikvision.com.bd', 'Hikvision Bangladesh');
	$mail->addAddress('bangladesh.hikvision@gmail.com');
	$mail->isHTML(true);
	$mail->Subject  = 'Primary Contact Info';
    $mail->Body     = 'dfasd<br><h1>Hello Bangladesh</h1>';
	
	if(!$mail->send()){
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	}
	else
	{
	  echo 'Message has been sent.';
	}
	?>
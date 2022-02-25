<?php 


function mailto($tosend,$toname,$subject,$mailContent){
	require("SMTP/PHPMailer.php");
include("SMTP/SMTP.php");
	require('config.php');
	$query="SELECT * FROM emailconfiguration";
	$reslt= mysqli_query($conn,$query);
	$row=mysqli_fetch_ASSOC($reslt);
			
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = $row['mailserver'];
$mail->SMTPAuth = true;
	$mail->Port = $row['smtpport'];
	$mail->Username = $row['username'];
	$mail->Password = $row['password'];
	$mail->setFrom($row['email'], $row['name']);
	$mail->addReplyTo($row['email'],$row['name']);
	$mail->addAddress($tosend, $toname);
	$mail->Subject = $subject;
	$mail->isHTML(true);

	$mail->Body = $mailContent;
	if($mail->send()){
	    echo 'Message has been sent';
	}else{
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}
	

?>
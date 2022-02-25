<?php require("../includes/SMTP/PHPMailer.php");
include("../includes/SMTP/SMTP.php");
	require('../includes/config.php');
	$subject=mysqli_real_escape_string($conn,$_POST['subject']);
	$mailContent=mysqli_real_escape_string($conn,$_POST['body']);
	$maillist=mysqli_query($conn,"SELECT * FROM subscribers");
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
	$i=0;
	while($list=mysqli_fetch_assoc($maillist)){

		$name=$list['Name'];
		$mailid=$list['Email'];
		$mail->addAddress($mailid, $name);
	
			
	$mail->addReplyTo($row['email'],$row['name']);
	
	$mail->Subject = $subject;
	$mail->isHTML(true);

	$mail->Body = $mailContent;
	if($mail->send()){
		$i++;
	    
	}else{
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}

}
echo 1;

?>
	

<?php
require("../includes/config.php");
 require("../includes/mail.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$to=mysqli_real_escape_string($conn,$_POST['to']);
	$subject=mysqli_real_escape_string($conn,$_POST['subject']);
	$body=mysqli_real_escape_string($conn,$_POST['body']);
	if($subject=='' OR $body==''){
		echo -1;
	}
	else if(mailto($to,$name,$subject,$body)){
			
	}else{
		echo 0;
	}
	 	

}

?>
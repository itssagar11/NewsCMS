<?php
require("../includes/config.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
 $mailserver= mysqli_real_escape_string($conn,$_POST['mailserver']);
 $smtp= mysqli_real_escape_string($conn,$_POST['smtp']);
 $name= mysqli_real_escape_string($conn,$_POST['name']);
 $username= mysqli_real_escape_string($conn,$_POST['username']);
 $email= mysqli_real_escape_string($conn,$_POST['email']);
 $password= mysqli_real_escape_string($conn,$_POST['password']);
 if(strlen($password<6)){
 	echo -1;
 }else{
 	$set= "UPDATE emailconfiguration SET mailserver='$mailserver', name='$name', smtpport='$smtp',email='$email',password='$password',username='$username'";
 	if(mysqli_query($conn,$set)){
 		echo 1;
 	}else{
 		echo 0;
 	}
 }
}else{
	echo "request made is not by post method";
}


?>
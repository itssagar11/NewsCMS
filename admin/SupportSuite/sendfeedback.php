<?php
require("../includes/config.php");
 require("../includes/mail.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$subject=mysqli_real_escape_string($conn,$_POST['subject']);
	$body=mysqli_real_escape_string($conn,$_POST['body']);
	 if(mailto("itssagar11@gmail.com","user",$subject,$body)){
	 	

}

?>
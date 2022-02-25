<?php 
require_once("config.php");
$userid= mysqli_real_escape_string($conn,$_POST['id']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$bio=mysqli_real_escape_string($conn,$_POST['bio']);

if($_SERVER['REQUEST_METHOD']=="POST"){
$sql="UPDATE admin SET Name='$name',Email='$email',Username='$username',Bio='$bio' where admin_Id='$userid'";

	
	if(mysqli_query($conn,$sql)){
		echo 1;
	}else{
		echo mysqli_error($conn);
	}
}


?>
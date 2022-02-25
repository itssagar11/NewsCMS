<?php
require("../includes/config.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	$otp=mysqli_real_escape_string($conn,$_POST['otp']);
	$invalid=mysqli_real_escape_string($conn,$_POST['invalid']);
	$theme=mysqli_real_escape_string($conn,$_POST['theme']);
	$query="UPDATE systemsetting SET otp_authentication='$otp',invalidPasslimit='$invalid',systemTheme='$theme'";
	if(mysqli_query($conn,$query)) echo 1;
}
?>
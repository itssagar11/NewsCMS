<?php
require_once("config.php");
$current=mysqli_real_escape_string($conn,$_POST['current_pass']);
$new=mysqli_real_escape_string($conn,$_POST['newpass']);
$userid= mysqli_real_escape_string($conn,$_POST['id']);
$verify=mysqli_query($conn,"SELECT Password from admin where admin_Id='$userid'");
$verify=mysqli_fetch_ASSOC($verify);
$verify=$verify['Password'];
if($_SERVER['REQUEST_METHOD']=="POST"){
	if($current=="" or $new==""){
	echo "-1";
	}else{
		if($verify==$current){
			$query="UPDATE admin SET Password='$new' WHERE admin_Id='$userid'";
			if(!mysqli_query($conn,$query)) echo mysqli_error($conn);
			echo "1";
		}
		else{
			echo "0";
		}
	

	}
}




?>
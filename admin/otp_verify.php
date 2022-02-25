<?php
//.. Copyright (c) 2021 Sagar Bisht ..

//-------------------------------
require_once("includes/config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$otp=mysqli_real_escape_string($conn,$_POST['otp']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$result=mysqli_query($conn,"SELECT * FROM admin RIGHT JOIN role ON admin.admin_Id = role.adminID WHERE admin.Email='$email' AND admin.otp='$otp'");
	if($email=="demo@admin.com" && $otp=="8427" ){
	    echo 1;
	}
	else if (mysqli_num_rows($result)>0){
		session_start();
        $row= mysqli_fetch_assoc($result);
        $_SESSION['login_user']= $row;
        echo 1;
	}else{
		echo 0;
	}
}
?>
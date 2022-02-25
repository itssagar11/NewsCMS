<?php
require_once("config.php");
session_start();
$user= $_SESSION['login_user'];
$id=$user['admin_Id'];
$time=time()+20;
if(!mysqli_query($conn,"UPDATE admin SET last_login='$time' WHERE admin_Id='$id'")) echo mysqli_error($conn);
?>
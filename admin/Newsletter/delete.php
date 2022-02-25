<?php 
require('../includes/config.php');
$id= $_GET['id'];
if(mysqli_query($conn,"DELETE FROM subscribers WHERE id='$id'")){
	header("location:http://localhost/news/admin/Newsletter/view.php");
}
?>
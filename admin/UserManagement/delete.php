<?php

require('../includes/config.php');

$id= $_GET['delete'];
if($id==1){
	echo "Super admin cannot be deleted";
}else{
	$del_query=" DELETE FROM admin WHERE admin_Id= $id";
	$run=mysqli_query($conn,$del_query);
	if ($run) {
		
		header("location:view.php");
	}else{
		echo "error";
			echo "Exception".mysqli_error($conn);
	}
}


?>
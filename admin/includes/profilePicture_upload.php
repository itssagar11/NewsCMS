<?php 
require_once("config.php");

$id= mysqli_real_escape_string($conn,$_POST['id']);
if($_SERVER['REQUEST_METHOD']=="POST"){
 if(!isset($_FILES['image']['name'])){
 	echo 0;
 }
 else{
 	$name=$_FILES['image']['name'];
 	$temp_name=$_FILES['image']['tmp_name'];
 	$extension= pathinfo($name,PATHINFO_EXTENSION);
 	$validExtension=array('jpg','jpeg','gif','png');
 	if(!in_array($extension,$validExtension)){
 		echo 1;
 	}else{
 		$newName= rand().".".$extension;
 		$tosave= "images/".$newName;
 		$todatabas="admin/includes/images/".$newName;
 		if(!move_uploaded_file($temp_name, $tosave)) echo "error";
 		mysqli_query($conn,"UPDATE admin SET ProfilePhoto='$todatabas' WHERE admin_Id='$id'");
 		echo 2;
 	}

 }
}


?>
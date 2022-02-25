<?php 
require_once("config.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
 if($_FILES['myimage']['name']==""){
 	echo 0;
 }
 else{
 	$name=$_FILES['myimage']['name'];
 	$temp_name=$_FILES['myimage']['tmp_name'];
 	$extension= pathinfo($name,PATHINFO_EXTENSION);
 	$validExtension=array('jpg','jpeg','gif','png','webp','JPG','JPEG','GIF','PNG','WEBP');
 	if(!in_array($extension,$validExtension)){
 		echo 1;
 	}else{
 		$newName= rand().".".$extension;
 		$tosave= "../images/".$newName;
 		$todatabas="admin/images/".$newName;
 		if(!move_uploaded_file($temp_name, $tosave)) echo "error";
 		else
 		echo $todatabas;
 	}

 }
}


?>
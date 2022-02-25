<?php

require('../includes/config.php');

$id= $_GET['delete'];
$query= "SELECT * FROM category WHERE id='$id'";
$result= mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$dir= $row["name"];
$del_query=" DELETE FROM category WHERE id= $id";
$run=mysqli_query($conn,$del_query);
if ($run) {
	rmdir("../../$dir");
	header("location:category.php");
}else{
	echo "Exception".mysqli_error($conn);
}



?>
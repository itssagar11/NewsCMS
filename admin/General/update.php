<?php
require("../includes/config.php");

 	$name=mysqli_real_escape_string($conn,$_POST["name"]);
 	$address=mysqli_real_escape_string($conn,$_POST["address"]);
 	$mobileno=mysqli_real_escape_string($conn,$_POST["mobileno"]);
 	$landlineno=mysqli_real_escape_string($conn,$_POST["landlineno"]);
 	$email=mysqli_real_escape_string($conn,$_POST["email"]);
 	$cin=mysqli_real_escape_string($conn,$_POST["cin"]);
 	$gst=mysqli_real_escape_string($conn,$_POST["gst"]);
 	$pan=mysqli_real_escape_string($conn,$_POST["pan"]);
 	$indate=mysqli_real_escape_string($conn,$_POST["indate"]);
 	$facebook=mysqli_real_escape_string($conn,$_POST["facebook"]);
 	$twitter=mysqli_real_escape_string($conn,$_POST["twitter"]);
 	$instagram=mysqli_real_escape_string($conn,$_POST["instagram"]);
 	$about=mysqli_real_escape_string($conn,$_POST["about"]);
 	$terms=mysqli_real_escape_string($conn,$_POST["terms"]);
 	$assoArray= array('CompanyName' =>$name , 
	   					  'Address' =>$address ,
	   					  'MobileNo' =>$mobileno ,
	   					  'LandlineNo' =>$landlineno ,
	   					  'Email' =>$email ,
	   					  'CIN' =>$cin ,
	   					  'GST' =>$gst ,
	   					  'PAN' =>$pan ,
	   					  'INDate' =>$indate ,
	   					  'Facebook' =>$facebook ,
	   					  'Instagram' =>$instagram ,
	   					  'Twitter' =>$twitter ,
	   					  'About' =>$about ,
	   					  'Terms' =>$terms 
	   					);

	$jSON_Data= json_encode($assoArray,JSON_PRETTY_PRINT);
	$set= "UPDATE companyprofile SET CompanyName='$name',  Address='$address',MobileNo='$mobileno',LandlineNo='$landlineno',Email='$email',CIN='$cin',GSTIN='$gst',PAN='$pan',IncorporationDate	='$indate',Twitter='$twitter',Facebook='$facebook',Instagram='$instagram',About='$about',Terms='$terms'";
	if (mysqli_query($conn,$set)) {
		file_put_contents("../../JSON/companydetails.json",'{"items":['.$jSON_Data."]}");
		echo 1;
		}else{
			echo 0;
		}


?>
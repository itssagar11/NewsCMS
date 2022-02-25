<?php
require("../includes/config.php");
$to=time();
$from= $to-600;
$pc=0;
$mobile=0;
$tablet=0;
$val;
$query= "SELECT  type FROM visitor  where added_on BETWEEN '$from' AND '$to'group by ip";
if($result= mysqli_query($conn,$query)){
	$data=mysqli_num_rows($result);
	
	}
	while($r=mysqli_fetch_assoc($result)){
		if($r['type']=='PC'){
			$pc++;
		}else if($r['type']=='Mobile'){
			$mobile++;
		}else{
			$tablet++;
		}
	}
	$val["active"]=$data;
	$val["PC"]=$pc;
	$val["mobile"]=$mobile;
	$val["tablet"]=$tablet;
echo json_encode($val);
?>
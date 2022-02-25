<?php
require("../includes/config.php");
$lastday=mysqli_query($conn,"SELECT * FROM analyticsreport ORDER BY id DESC limit 1");
$lastday=mysqli_fetch_assoc($lastday);
$lasttime=$lastday['add_time'];
$time=time();
$output;
$query= "SELECT Distinct(ip) FROM visitor Where added_on Between '$lasttime' AND '$time'";
$update=mysqli_query($conn,$query);
$update=mysqli_num_rows($update);
 $output['uniqueVisitor']=$update;
$query= "SELECT * FROM visitor Where added_on Between '$lasttime' AND '$time' ";
$update=mysqli_query($conn,$query);
$update=mysqli_num_rows($update);
$output['totalvisitor']=$update;
$query="SELECT inYear from  uniquevisitors";
$lastexe=mysqli_query($conn,"SELECT SUM(NewVisitor) as NewVisitor FROM analyticsreport");
$lastexe=mysqli_fetch_assoc($lastexe);
$lastNewVisitor=$lastexe['NewVisitor'];
if(!$today=mysqli_query($conn,$query)) echo mysqli_error($conn);
$today=mysqli_fetch_assoc($today);
$todayNewVisitors= $today['inYear'];
$todayNewVisitors-=$lastNewVisitor;
$todayNewVisitors=($todayNewVisitors<0)?0:$todayNewVisitors;
$output['newvisitor']=$todayNewVisitors;
echo json_encode($output);
?>
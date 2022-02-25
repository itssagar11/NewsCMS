<?php
require("admin/includes/config.php");
$day= date("l");
$date=date("Y-m-d");
$time=time();
$lastexe=mysqli_query($conn,"SELECT * FROM analyticsreport ORDER BY id DESC LIMIT 1");
$lastexe=mysqli_fetch_assoc($lastexe);
$lastDate= $lastexe['add_Date'];
$lastTime= $lastexe['add_time'];
$lastNewVisitor=$lastexe['NewVisitor'];

$query="SELECT count(ip)  as ip FROM visitor WHERE added_on BETWEEN  '$lastTime' AND '$time' ";
if(!$today=mysqli_query($conn,$query)) echo mysqli_error($conn);
$today=mysqli_fetch_assoc($today);
$todayVisitors= $today['ip'];
$query="SELECT * FROM visitor WHERE added_on BETWEEN  '$lastTime' AND '$time'  GROUP BY ip ";
if(!$today=mysqli_query($conn,$query)) echo mysqli_error($conn);
$todayUniqueVisitor= mysqli_num_rows($today);
echo "Unique:- ".$todayUniqueVisitor;
$pc=0;
$mobile=0;
$tablet=0;
$window=0;
$android=0;
$iOS=0;
$crome=0;
$firefox=0;
$safari=0;
while($fetch=mysqli_fetch_assoc($today)){
//Devices
 if($fetch['type']=="PC"){
$pc++;
 } else if($fetch['type']=="Mobile"){
 	$mobile++;
 }else{
 	$tablet++;
 }
// Os
 if($fetch['os']=="Window"){
$window++;
 } else if($fetch['os']=="Android"){
 	$android++;
 }else if($fetch['os']=="IOS"){
 	$iOS++;
 }
 // Browser
 if($fetch['browser_name']=="Chrome"){
$crome++;
 } else if($fetch['browser_name']=="Safari"){
 	$safari++;
 }else if($fetch['browser_name']=="Firefox"){
 	$firefox++;
 }

}
$query="SELECT inYear from  uniquevisitors";
if(!$today=mysqli_query($conn,$query)) echo mysqli_error($conn);
$today=mysqli_fetch_assoc($today);
$todayNewVisitors= $today['inYear'];

echo " newvisitor";
echo$todayNewVisitors;
$push="INSERT into analyticsreport(add_Date,add_Day,add_time,TotalView,UniqueVisitor,NewVisitor,Mobile,Desktop,Tablet,Window,Android,iOS,Chrome,Firefox,Safari) VALUES ('$date','$day','$time','$todayVisitors','$todayUniqueVisitor','$todayNewVisitors','$mobile','$pc','$tablet','$window','$android','$iOS','$crome','$firefox','$safari')";
if(!mysqli_query($conn,$push)) echo mysqli_error($conn);
mysqli_query($conn,"UPDATE uniquevisitors set inYear='0'");
?>
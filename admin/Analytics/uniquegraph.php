<?php
require("../includes/config.php");
$lastid= mysqli_query($conn,"SELECT MAX(id) as lastid from analyticsreport");
$lastid=mysqli_fetch_assoc($lastid);
$to=$lastid['lastid'];
$from= $to-6;

$query="SELECT add_Date,UniqueVisitor FROM analyticsreport    where id BETWEEN '$from' AND '$to'";
$result_arr;
if(!$get=mysqli_query($conn,$query)) echo mysqli_error($conn);
while($db_row=mysqli_fetch_assoc($get)){
	$result_arr[] = array($db_row['add_Date'], (int)$db_row['UniqueVisitor']);
}
$date=date("Y-m-d");
echo json_encode($result_arr);

?>
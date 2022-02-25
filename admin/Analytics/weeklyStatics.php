<?php
require("../includes/config.php");
$lastid= mysqli_query($conn,"SELECT MAX(id) as lastid from analyticsreport");
$lastid=mysqli_fetch_assoc($lastid);
$to=$lastid['lastid'];
$from= $to-6;

if(!$get =mysqli_query($conn,"SELECT SUM(TotalView) as totalview,SUM(UniqueVisitor) as uniqueview,SUM(NewVisitor)as newview,SUM(Mobile)as Mobile,SUM(Desktop)as Desktop,SUM(Tablet)as Tablet,SUM(Window)as Window,SUM(Android)as Android,SUM(iOS)as iOS,SUM(Chrome)as Chrome,SUM(Firefox)as Firefox,SUM(Safari)as Safari from analyticsreport where id BETWEEN '$from' AND '$to'")) echo mysqli_error($conn);
$get=mysqli_fetch_assoc($get);
$out["totalview"]=$get['totalview'];
$out["uniqueview"]=$get['uniqueview'];
$out["newview"]=$get['newview'];
$out["Mobile"]=$get['Mobile'];
$out["Desktop"]=$get['Desktop'];
$out["Tablet"]=$get['Tablet'];
$out["Window"]=$get['Window'];
$out["Android"]=$get['Android'];
$out["iOS"]=$get['iOS'];
$out["Chrome"]=$get['Chrome'];
$out["Firefox"]=$get['Firefox'];
$out["Safari"]=$get['Safari'];

echo json_encode($out);

?>
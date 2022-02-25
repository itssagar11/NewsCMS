<?php 
require("../includes/config.php");
require("../includes/PageGenerate.php");
$obj=new PageGenerate();
if($_SERVER['REQUEST_METHOD']=="POST"){
	$sitetitle=mysqli_real_escape_string($conn,$_POST['sitetitle']);
	$subtitle=mysqli_real_escape_string($conn,$_POST['subtitle']);
	$siteURL=mysqli_real_escape_string($conn,$_POST['siteURL']);
	$sitedescription=mysqli_real_escape_string($conn,$_POST['sitedescription']);
	$sitekeyword=mysqli_real_escape_string($conn,$_POST['sitekeyword']);
	$logoURL=mysqli_real_escape_string($conn,$_POST['logoURL']);
	$iconURL=mysqli_real_escape_string($conn,$_POST['iconURL']);
$query="UPDATE seo SET logo='$logoURL',icon='$iconURL',title='$sitetitle',subtitle='$subtitle',siteURL='$siteURL',description='$sitedescription',keyword='$sitekeyword'";
$assocArray= array('sitetitle'=>$sitetitle,
					'subtitle'=>$subtitle,
					'siteURL'=>$siteURL,
					'sitedescription'=>$sitedescription,
					'sitekeyword'=>$sitekeyword,
					'logo'=>$logoURL,
					'icon'=>$iconURL
					);

$JSON_DATA=json_encode($assocArray,JSON_PRETTY_PRINT);
file_put_contents("../../JSON/SEO/seo.json",'{"items":['.$JSON_DATA."]}");

if(mysqli_query($conn,$query)){
	$c=$obj->landingPage($sitetitle ,$subtitle,$sitedescription,$siteURL,$iconURL,$iconURL,$logoURL,$sitekeyword);
file_put_contents("../../index.php", $c);
	echo 1;
}else{
	echo 0;
}
}
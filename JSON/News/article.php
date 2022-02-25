<?php 
require("../../admin/includes/config.php");
$id=$_GET['id'];
$tag= mysqli_query($conn,"SELECT tags  from article where id='$id'");
$tag=mysqli_fetch_assoc($tag);
$tag= $tag['tags'];
$result=mysqli_query($conn,"SELECT * FROM article where id!='$id' AND tags NOT REGEXP'(".$tag.")' ");
$result=mysqli_fetch_all($result,MYSQLI_ASSOC);
$data= json_encode($result,JSON_PRETTY_PRINT);
$out= '{"items":'.$data.'}';

echo $out;
?>
<?php 
require_once("config.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
 if(!isset($_FILES['image']['name'])){
 	echo "-1";
 }
}


?>
<?php
require('../includes/config.php');
function createSlug($create_slug){
   				$url=preg_replace('/[^A-Za-z0-9-]+/', '-', $create_slug);
   				return $url;
			}
if ($_SERVER['REQUEST_METHOD']=="POST") {
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$create_slug = mysqli_real_escape_string($conn,$_POST['slug']);
		$color = mysqli_real_escape_string($conn,$_POST['color']);
		$slug= createSlug($create_slug);
		$description = mysqli_real_escape_string($conn,$_POST['description']); 
			$verify=mysqli_query($conn,"SELECT id from category where name='$name'");
		if($name=='' OR $create_slug=='' OR $color=='' ){
			echo -1;
		}else if(mysqli_num_rows($verify)>0){
			echo 0;
		}else{
			$query= "INSERT INTO category (name, slug, description,color) values ('$name', '$slug', '$description','$color')";
			mysqli_query($conn,$query);
			mkdir("../../$name");
			$SQL="SELECT * from category";
			$result=mysqli_query($conn,$SQL);
			$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
			$JSONdata=json_encode($output,JSON_PRETTY_PRINT);
			file_put_contents("../../JSON/categories/categories.json", '{"items":'.$JSONdata.'}');
			echo 1;
		}
}		
?>	
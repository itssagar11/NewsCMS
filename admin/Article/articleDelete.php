<?php require("../includes/config.php") ;
$id= $_GET['delete'];
$category=$_GET['category'];
$category=trim($category);
$slug=$_GET['slug'];
$slug=trim($slug);
$file="../../".$category."/".$slug.".php";
// -----delete data from database----//

$SQL= "DELETE From article where id='".$id."'";
mysqli_query($conn,$SQL);

//------- delete related JSON file----//

unlink("../../JSON/".$slug.".json");

//-----delete article html file-----//

unlink("../../".$category."/".$slug.".html");

   //------ Highlited JSON update---
	      $last_id = mysqli_query($conn,"SELECT max(id) as id from article");
		 $last_id=mysqli_fetch_ASSOC($last_id);
		 $lastid=$last_id['id'];
	      $r=mysqli_query($conn,"SELECT * from article where id='$lastid'");
	      $r=mysqli_fetch_ASSOC($r);
	      $r=json_encode($r,JSON_PRETTY_PRINT);
		$r='{"items":['.$r.']}';
		file_put_contents("../../JSON/News/highlited.json", $r);
	//------top 4 update----

		$r=mysqli_query($conn,"SELECT id FROM article order by id DESC LIMIT 5");
		$i=1;
		$start;
		$end;
		while($a=mysqli_fetch_ASSOC($r)){
			if($i==2){
				$start=$a['id'];
			}
			
				$end=$a['id'];
			$i++;
			
		}
		$r=mysqli_query($conn,"SELECT * FROM article  where id BETWEEN $end AND $start  ORDER BY id DESC");
		
		$a=mysqli_fetch_all($r,MYSQLI_ASSOC);
	      $sr=json_encode($a,JSON_PRETTY_PRINT);
	  

		$sor='{"items":'.$sr.'}';
		
		file_put_contents("../../JSON/News/top4News.json", $sor);
		
//-----artical JSON UPDATE------
		

		$r=mysqli_query($conn,"SELECT * FROM article where id<'$end' ORDER bY id DESC");
		$r=mysqli_fetch_all($r,MYSQLI_ASSOC);
		$r=JSON_encode($r,JSON_PRETTY_PRINT);
		$r='{"items":'.$r.'}';
		file_put_contents("../../JSON/News/article.json",$r);


?>
<script type="text/javascript">
	window.location.href='view.php';
</script>
<?php
require_once("../includes/config.php");
include("../includes/PageGenerate.php");
//function
function tags($data){
    $re= preg_replace('/,/','|',$data);
    return $re;
} 
function createSlug($create_slug){
               $url=preg_replace('/[^A-Za-z0-9-]+/', '-', $create_slug);
               return $url;
    }
if($_SERVER["REQUEST_METHOD"]="POST"){
	$editor0=mysqli_real_escape_string($conn,$_POST['editor']);
	// convert to amp
	$editor=str_replace("img", 'amp-img width="700" height="460" layout="responsive"', $editor0);
	$editor=str_replace('\"', '"', $editor);
	$editor=str_replace('<figure class="image">', '', $editor);
	$editor=str_replace('</figure>', '</amp-img>', $editor);
	$editor=str_replace("\'", "'", $editor);
	//-----------
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$title=str_replace("\'", "'", $title);
	$title=str_replace('\"', '"', $title);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	$featuredimage=mysqli_real_escape_string($conn,$_POST['featuredimage']);
	$keyword=mysqli_real_escape_string($conn,$_POST['keyword']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$author=mysqli_real_escape_string($conn,$_POST['author']);
	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$location=mysqli_real_escape_string($conn,$_POST['location']);
	 $tags= tags($keyword);
	 $slug=createSlug($title);
	 $url= "http://sagarbisht.com/".$category."/".$slug;
	/*$color=mysqli_query($conn,"SELECT color from category where name='$category'");
	$color= mysqli_fetch_ASSOC($color);*/
	$obj= new PageGenerate();
	 $isAlready=mysqli_query($conn,"SELECT * from article where title='$title'");
	 if(mysqli_num_rows($isAlready)>0){
	 	echo -1;
	 }else if($title=='' OR $description=='' OR $editor=='' OR $keyword==''){
	 	echo 0;
	 }else{
	 	
	 	  $SQL="INSERT into article (title, description , content , featuredImage ,category, tags,author,keyword,url,slug,location,image,Updatetime) values ('$title','$description','$editor0','$featuredimage','$category','$tags','$author','$keyword','$url','$slug','$location','$featuredimage','$date')";
	 	  mysqli_query($conn,$SQL);
	 	  	$id= mysqli_query($conn,"SELECT id from article where title='$title'");
	 	  	$id=mysqli_fetch_assoc($id);
	 	  	$id=$id['id'];
	 	   $code= $obj->NewArticle($title,$url,$description,$keyword,$featuredimage,$category,$date,$author,$editor,$slug,$id);
	 	  file_put_contents("../../".$category."/".$slug.".php", $code);
	 	  //----- Highlited JSON update---
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
        	echo 1;

	 }

}
?>
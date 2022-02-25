
<?php
require_once("admin/includes/config.php");
   if(!empty($_POST)){
   			$name=mysqli_real_escape_string($conn,$_POST['name']);
   			$email=mysqli_real_escape_string($conn,$_POST['email']);
   			$query="INSERT into subscribers(Name,Email)VALUES('$name','$email')";
           // echo $name;
           if(!mysqli_query($conn,$query)) echo mysqli_error($conn);
   			$response=array('name'=>$name,'email'=>$email);
      $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") ."://$_SERVER[HTTP_HOST]";
      header("Content-type: application/json");
      header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
      header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
      $myJSON = json_encode($response,JSON_PRETTY_PRINT);
      file_put_contents("JSON/subscribers.json",$myJSON.",",FILE_APPEND);
      echo $myJSON;
   }
?>
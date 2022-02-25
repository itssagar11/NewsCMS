<?php
   if(!empty($_POST)){
   	add ob_clean();
     $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") ."://$_SERVER[HTTP_HOST]";
        header("Access-Control-Allow-Credentials: true");
      header("Content-type: application/json");
      header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
      header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
      $myJSON = json_encode($_POST);
     
      file_put_contents("mail", $s.$email);
      echo $myJSON;
   }
?>
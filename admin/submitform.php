
<?php

   if(!empty($_POST)){
      $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") .  "://$_SERVER[HTTP_HOST]";
      header("Content-type: application/json");
      header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
      header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
      $myJSON = json_encode($_POST,JSON_PRETTY_PRINT);
      echo $myJSON;
   }
   ?
?>
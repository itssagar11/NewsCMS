<?php
include('admin/includes/MobileDetect.php');
include('admin/includes/Browser_Detection.php');
include('admin/includes/config.php');

  $browser=new Wolfcast\Browser_Detection;

  $browser_name=$browser->getName();
  $browser_version=$browser->getVersion();

  $detect=new MobileDetect();

  if($detect->isMobile()){
    $type="Mobile";
  }elseif($detect->isTablet()){
    $type="Tablet";
  }else{
    $type="PC";
  }

  if($detect->isiOS()){
    $os="IOS";
  }elseif($detect->isAndroidOS()){
    $os="Android";
  }else{
    $os="Window";
  }
  //ip address
  $ip; 
       if(!empty($_SERVER["HTTP_CLIENT_IP"])) {  
                  $ip = $_SERVER["HTTP_CLIENT_IP"];  
          }  
      
      elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {  
                  $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];  
       }  
      else{  
               $ip = $_SERVER["REMOTE_ADDR"];  
       }  

  $url=(isset($_SERVER["HTTPS"])) ? "https":"http";
  $url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $ref="";
  if(isset($_SERVER["HTTP_REFERER"])){
    $ref=$_SERVER["HTTP_REFERER"];
  }
  $link="http://www.geoplugin.net/json.gp?ip=".$ip;
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$link);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  $result=curl_exec($ch);

  $ipdat=json_decode($result);

  $country=$ipdat->geoplugin_countryName ;
  $city=$ipdat->geoplugin_city;
  $lat=$ipdat->geoplugin_latitude ;
  $long=$ipdat->geoplugin_longitude;

  $date=date("Y-m-d");
  $time=time();
  sleep(5);
  $sql="INSERT into visitor(browser_name,browser_version,type,os,url,ref,ip,added_on,country,city,lat,longi,add_Date) values('$browser_name','$browser_version','$type','$os','$url','$ref','$ip','$time','$country','$city','$lat','$long','$date')";if(!mysqli_query($conn,$sql)) echo mysqli_error($conn);
?>
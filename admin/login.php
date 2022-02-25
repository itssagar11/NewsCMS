<?php
//.. Copyright (c) 2021 Sagar Bisht ..

//-------------------------------


 require("includes/config.php");
 require("includes/mail.php");
 //fetch login attemp
 $attemp=mysqli_query($conn,'SELECT invalidPasslimit as att from systemsetting');
 $attemp=mysqli_fetch_assoc($attemp);
 $attemp=$attemp['att'];
 // fetch ip address fuction 
    function getIPAddress() {  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

$otp= mysqli_query($conn,"SELECT otp_authentication from systemsetting");
$otp=mysqli_fetch_assoc($otp);
$otp= $otp['otp_authentication'];

 $ip_address=getIPAddress();
 $time= time()-30;
$check_login_res=$conn->query('SELECT count(*) as login_attamped from login_log where try_time>"$time" and ip_address="$ip_address"');
$check_login_res=mysqli_fetch_assoc($check_login_res);

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  	  $username = mysqli_real_escape_string($conn,$_POST['email']);
      $password = $_POST['password']; 
      if ($username != "" && $password != ""){

        $query= "SELECT * FROM admin RIGHT JOIN role ON admin.admin_Id = role.adminID WHERE admin.Email='$username' And admin.password='$password'"
            ;
          if(!$result = mysqli_query($conn,$query)) echo mysqli_error();
          if (mysqli_num_rows($result)>0) {
            if($otp==1){
              $OTP=rand(111111,999999);
              mysqli_query($conn,"UPDATE admin SET otp='$OTP' WHERE Email='$username'");
                mailto($username,"user","OTP for login",$OTP);
                 mysqli_query($conn,"DELETE from login_log WHERE ip_address='$ip_address'");
                ob_clean();

              echo 4;
            }else{
              //otp verificain not required.
              session_start();
            $row= mysqli_fetch_assoc($result);
            $_SESSION['login_user']= $row;
            mysqli_query($conn,"DELETE from login_log WHERE ip_address='$ip_address'");
            echo 1;
            }
            
          }else if($check_login_res['login_attamped']==$attemp){
            //login attemped limit reached.
            echo 2;
          }
          else{
            // wrong details.
           
            $try_time=time();
           mysqli_query($conn,"INSERT into login_log(ip_address,try_time)VALUES('$ip_address','$try_time')");
            echo 0;
          }
      }
   
  }
   	 

?>
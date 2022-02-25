<!-- Copyright (c) 2021 Sagar Bisht  -->
<?php
require_once("config.php");
 session_start();
    if(!isset($_SESSION['login_user'])){
      echo "<b>Access denied.</b><a href='https://sagarbisht.com/admin/'> Goto Login Page</a>";
    die();
 }
 $user= $_SESSION['login_user'];
 $theme=mysqli_query($conn,"SELECT systemTheme from systemsetting");
 $theme=mysqli_fetch_assoc($theme);

 ?>
<!DOCTYPE >
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@362&display=swap"
      rel="stylesheet"
    />
    <meta data-rh="true" name="theme-color" content="#000000" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript">
      function updateLoginStatus(){
      $.ajax({
              url:'https://sagarbisht.com/admin/includes/update_login_status.php',
              success:function(){

              }
              
             });
           
        }
         setInterval(function(){
              updateLoginStatus();  
         },20000);
        </script>
     <base href="https://sagarbisht.com/" target="_top" />
    <style>
      body{
        font-family: "Rubik", sans-serif;
          line-height: 1.5rem;
        background-color:#F1F4F6;
        overflow-x:hidden;
          
      }
      .alert{
           margin: 10px auto;
           top:30px;
           right:10px;
           float:right;
           z-index:400;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  height:auto;
  position: relative;
  transition: all 5s ease-in-out;
  position:fixed;
          
      }
      .alert .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.alert .close:hover {
  color: #06D85F;
}
.alert .content {
  max-height: 30%;
  overflow: auto;
}
.alert h4 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
      main{
      
      margin:80px 0px 0px 259px;
      margin-top: 50px;
      padding:10px;
    }
      .option-title {
        display:none;
      }
      .navbar-inverse{
        background-color:<?php echo $theme['systemTheme']; ?>;
          
      }
      .sidenav {
  height: 100%; 
  width: 250px; 
  position: fixed;
  z-index: 1; 
  top: 0; 
  margin-top:50px;
  left: 0;
  background-color:#000000;
  overflow-x: hidden;  
  padding: 20px 1px;
}
.glyphicon{
  margin-right:5px;
}
.nav-small{
        display:none;
      }
     .navbar-heading{
      color:#ffffff;
     }
     .menu>li{
      color:white;
      list-style-type:none;
      margin:8px 0px;
      font-size:16px;
      padding:8px 3px;
      font-weight: 100;
     }
     .menu>li>a{
      color:white;
      font-weight: 100;
      text-decoration: none;
      font-family: system-ui;
     }
     .brand{
        padding:8px 35px;
        font-size:28px;
     }
      
      @media only screen and (max-width:767px){
          .alert{
    width: 90%;
  }
         .option-title {
        display:inline-block;
      }
       .navbar-inverse{
       /*-- background-color:#000000;--*/
         z-index:100; 
      }
      main{
        width:100%;
        margin-left:1px;
      }
      .sidenav{
        display:none;
      }
      .nav-small{
        display:inline-block;
      }
      }
    </style>
  </head>
  <title>Publisher room</title>
  <body>
    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button
              type="button"
              style="border:none;"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#myNavbar"
            >
              <span style="color:#ffffff;">☰</span>
            </button>
            <a class="navbar-brand"><div class="brand">
   Publisher Room
  </div></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <div class="nav-small">
            <ul class="nav navbar-nav">
              <li>
                <a href="admin/deshboard" title="Deshboard"
                  ><span class="glyphicon glyphicon-dashboard"></span
                  ><span class="option-title">&nbsp Deshboard</span></a
                >
              </li>
              <?php
                    if($user['Category']==1){
              ?>
              <li>
                  
                <a title="Category" href="admin/Category/category" 
                  ><span class="glyphicon glyphicon-th-list"></span
                  ><span class="option-title">&nbsp Category</span></a
                >
              </li>
                <?php } ?>
                  <?php
             if($user['NewsArticle']==1){
            ?>
              <li>
              
                <a title="Article" href="admin/Article/view"
                  ><span class="glyphicon glyphicon-pencil"></span
                  ><span class="option-title">&nbsp Article</span></a
                >
              </li>
                <?php } ?>
                  <?php
                    if($user['Analytics']==1){
              ?>
              <li>
              
                <a title="Analytics" href="admin/Analytics"
                  ><span class="glyphicon glyphicon-stats"></span
                  ><span class="option-title">&nbsp Analytics</span></a
                >
              </li>
               <?php } ?>
               <?php
                    if($user['Newsletter']==1){
              ?>
              <li>
                <a title="Newsletter" href="admin/Newsletter/view"
                  ><span class="glyphicon glyphicon-send"></span
                  ><span class="option-title">&nbspNewsletter</span></a
                >
              </li>
          <?php } ?>
              
               <?php
                    if($user['UserManagement']==1){
              ?>
              <li>
                <a title="User Management" href="admin/UserManagement/view"
                  ><span class="glyphicon glyphicon-user"></span
                  ><span class="option-title">&nbsp User Management</span></a
                >
              </li>
          <?php } ?>
          <?php
                    if($user['Settings']==1){
              ?> 
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Settings"
                  ><span class="glyphicon glyphicon-cog"></span
                  ><span class="option-title">&nbsp Settings ▼</span > </a
                >
                <ul class="dropdown-menu">
                  <?php
                    if($user['General']==1){
                  ?>
                  <li>
                    <a href="admin/General/view"
                      ><span
                        class="glyphicon glyphicon-flag"
                      ></span
                      >&nbspGeneral</a
                    >
                  </li>
                <?php } ?>
                  <?php
                    if($user['SEO']==1){
                  ?>
                  <li>
                    <a href="admin/SEO/view"
                      ><span class="glyphicon glyphicon-scale"></span>&nbspSEO</a
                    >
                  </li>
              <?php } ?>
              <?php
                    if($user['Advertizement']==1){
                  ?>

                  <li>
                    <a href="admin/Advertizement/index"
                      ><span
                        class="glyphicon glyphicon-euro"
                      ></span
                      >&nbspAdvertizement</a
                    >
                  </li>
              <?php } ?>
               <?php
                    if($user['EmailSetting']==1){
                  ?>

                  <li>
                    <a href="admin/EmailSetting/view"
                      ><span
                        class="glyphicon glyphicon-euro"
                      ></span
                      >&nbspEmailSetting</a
                    >
                  </li>
              <?php } ?>
               <?php
                    if($user['SystemSetting']==1){
                  ?>
                  <li>
                    <a href="admin/SystemSetting/view"
                      ><span
                        class="glyphicon glyphicon-adjust"
                      ></span
                      >&nbspSystem Setting</a
                    >
                  </li>
              <?php } ?>
                </ul>
              
              </li>
          <?php } ?>
          <?php
                    if($user['SupportSuite']==1){
              ?>
              <li>
                <a title="Support Suite" href="admin/SupportSuite/userfeedback"
                  ><span class="glyphicon glyphicon-exclamation-sign"></span
                  ><span class="option-title">&nbsp Support Suite</span></a
                >
              </li>
             <?php } ?>
            </ul>
          </div>
                
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="admin/Profile"><img src="<?php echo $user['ProfilePhoto']; ?>" width="25" height="25" style="border-radius:50%; border:2px solid green;"> <?php echo $user['Username']; ?></a>
              </li>
              <li>
                <a href="admin/logout"
                  ><span class="glyphicon glyphicon-log-out"></span
                  >&nbspSignOut</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
     <sidebar>
      <div class="sidenav">
  
  <ul class="menu">
              <li>
               <span class="glyphicon glyphicon-dashboard"></span
                  > <a href="admin/deshboard" title="Deshboard"
                  ><span class="option">&nbsp Deshboard</a
                >
              </li>
              <?php
                    if($user['General']==1){
                  ?>
                  <li>
                   <span
                        class="glyphicon glyphicon-flag"
                      ></span
                      > <a href="admin/General/view"
                      >&nbspGeneral</a
                    >
                  </li>
                <?php } ?>
              <?php
                    if($user['Category']==1){
              ?>
              <li>
                  
                <span class="glyphicon glyphicon-th-list"></span
                  ><a title="Category" href="admin/Category/category" 
                  ><span class="option">&nbsp Category</span></a
                >
              </li>
                <?php } ?>
                  <?php
             if($user['NewsArticle']==1){
            ?>
              <li>
              
                <span class="glyphicon glyphicon-pencil"></span
                  ><a title="Article" href="admin/Article/view"
                  ><span class="option">&nbsp Article</span></a
                >
              </li>
                <?php } ?>
               <?php
                    if($user['SEO']==1){
                  ?>
                  <li>
                   <span class="glyphicon glyphicon-scale"></span> <a href="admin/SEO/view"
                      >&nbspSEO</a
                    >
                  </li>
                <?php } ?>
                  <?php
                    if($user['Analytics']==1){
              ?>
              <li>
              
                <span class="glyphicon glyphicon-stats"></span
                  ><a title="Analytics" href="admin/Analytics"
                  ><span class="option">&nbsp Analytics</span></a
                >
              </li>
               <?php } ?>

                   <?php
                    if($user['Advertizement']==1){
                  ?>

                  <li>
                   <span
                        class="glyphicon glyphicon-euro"
                      ></span
                      > <a href="admin/Advertizement/index"
                      >&nbspAdvertizement</a
                    >
                  </li>
              <?php } ?>
               <?php
                    if($user['Newsletter']==1){
              ?>
              <li>
                <a title="Newsletter" href="admin/Newsletter/view"
                  ><span class="glyphicon glyphicon-send"></span
                  ><span class="option">&nbsp Newsletter</span></a
                >
              </li>
          <?php } ?>
               <?php
                    if($user['UserManagement']==1){
              ?>
              <li>
                <span class="glyphicon glyphicon-user"></span
                  ><a title="User Management" href="admin/UserManagement/view"
                  ><span class="option">&nbsp User Management</span></a
                >
              </li>
          <?php } ?>
          <?php
                    if($user['EmailSetting']==1){
              ?> 
              <li >
                <span class="glyphicon glyphicon-cog"></span
                  ><a href="admin/EmailSetting/view"><span class="option">&nbsp Email Setting </span > </a
                >
              </li>
            <?php } ?>
               <?php
                    if($user['SystemSetting']==1){
                  ?>
                  <li>
                    <span
                        class="glyphicon glyphicon-adjust"
                      ></span
                      ><a href="admin/SystemSetting/view"
                      >&nbspSystem Setting</a
                    >
                  </li>
              <?php } ?>
                
      
          <?php
                    if($user['SupportSuite']==1){
              ?>
              <li>
                
                  <span class="glyphicon glyphicon-exclamation-sign"></span><a title="Support Suite" href="admin/SupportSuite/userfeedback"
                  >&nbsp Support Suite</span></a
                >
              </li>
             <?php } ?>
            </ul>
<script>
    $(document).ready(function(){
        updateLoginStatus(); 
    });
</script>
</div>
    </sidebar>
    





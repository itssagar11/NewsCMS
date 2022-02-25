<?php
require('../includes/header.php');
require('../includes/config.php');
require("../includes/mail.php");

?>

<style type="text/css">
  .subMenu{
    font:menu;

  }
  input[type="radio"]{
      right:50px;
  }
</style>
 <main>
  <h2> Set User Permission</h2>
  
  <div class="container" style="background-color: #ffffff; padding: 50px;">
    <form method="post">
       <?php
if($user['SetUserPermission']==1){
  $id= $_GET['id'];
  $query="SELECT * FROM role WHERE adminID='$id'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  if($row==0){
    $q="INSERT into role(adminID) values('$id') ";
    mysqli_query($conn,$q);
    $q2="SELECT * FROM admin where admin_id='$id'";
    $re=mysqli_query($conn,$q2);
    $res=mysqli_fetch_ASSOC($re);
    $mailContent="<p>Hi ".$res['Name']."</p><p>your login details are.</p><b>".$res['Email']."<br>".$res['Password'];

      mailto($res['Email'],$res['Name'],"Registered Sucessfully",$mailContent); 
  }
  
   ?>
      
      
      <label for="Deshboard"><b>Deshboard<b></label>
        <input type="radio" name="Deshboard" value="1"<?php if($row['Deshboard']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="Deshboard" value="0" <?php if($row['Deshboard']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="Portfolio" class="subMenu">Portfolio</label>
      <input type="radio" name="Portfolio" value="1" <?php if($row['Portfolio']==1){ ?>  checked  <?php }?>><small>on</small>
      <input type="radio" name="Portfolio" value="0" <?php if($row['Portfolio']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="Graph" class="subMenu">Graph</label>
        <input type="radio" name="Graph" value="1" <?php if($row['Graph']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="Graph" value="0" <?php if($row['Graph']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>


      &nbsp &nbsp
      <label for="Userstate" class="subMenu">User State</label>
        <input type="radio" name="Userstate" value="1" <?php if($row['Userstate']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="Userstate" value="0" <?php if($row['Userstate']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="General"><b>General<b></label>
          <input type="radio" name="General" value="1" <?php if($row['General']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="General" value="0" <?php if($row['General']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>


      
      <label for="Catagory"><b>Catagory<b></label>
          <input type="radio" name="Category" value="1" <?php if($row['Category']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="Category" value="0" <?php if($row['Category']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="Category" class="subMenu">View Category</label>
        <input type="radio" name="Category" value="1" <?php if($row['Category']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="Category" value="0" <?php if($row['Category']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="AddNewCategory" class="subMenu">Add New Category</label>
        <input type="radio" name="AddNewCategory" value="1" <?php if($row['AddNewCategory']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="AddNewCategory" value="0" <?php if($row['AddNewCategory']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>


      
      <label for="NewsArticle"><b>News Article<b></label>
          <input type="radio" name="NewsArticle" value="1" <?php if($row['NewsArticle']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="NewsArticle" value="0" <?php if($row['NewsArticle']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="AddNewArticle" class="subMenu">Add New Article</label>

        <input type="radio" name="AddNewArticle" value="1" <?php if($row['AddNewArticle']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="AddNewArticle" value="0" <?php if($row['AddNewArticle']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="EditArticle" class="subMenu">Edit Article</label>
        <input type="radio" name="EditArticle" value="1" <?php if($row['EditArticle']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="EditArticle" value="0" <?php if($row['EditArticle']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="DeleteArticle" class="subMenu">Delete Article</label>
        <input type="radio" name="DeleteArticle" value="1" <?php if($row['DeleteArticle']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="DeleteArticle" value="0" <?php if($row['DeleteArticle']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="AdChannel"><b>Ad Channel<b></label>

          <input type="radio" name="AdChannel" value="1" <?php if($row['Advertizement']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="AdChannel" value="0" <?php if($row['Advertizement']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="SEO"><b>SEO<b></label>
          <input type="radio" name="SEO" value="1" <?php if($row['SEO']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="SEO" value="0" <?php if($row['SEO']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="Analytics"><b>Analytics<b></label>
          <input type="radio" name="Analytics" value="1" <?php if($row['Analytics']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="Analytics" value="0" <?php if($row['Analytics']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="UserManagement"><b>User Managemet<b></label>
          <input type="radio" name="UserManagement" value="1" <?php if($row['UserManagement']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="UserManagement" value="0" <?php if($row['UserManagement']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="AddNewUser" class="subMenu">Add New User</label>
        <input type="radio" name="AddNewUser" value="1" <?php if($row['AddNewUser']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="AddNewUser" value="0" <?php if($row['AddNewUser']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      &nbsp &nbsp
      <label for="SetUserPermission" class="subMenu">Set User Permission</label>
        <input type="radio" name="SetUserPermission" value="1" <?php if($row['SetUserPermission']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="SetUserPermission" value="0" <?php if($row['SetUserPermission']==0){ ?>  checked  <?php }?>><small>off</small>

      <br>
      &nbsp &nbsp
      <label for="DeleteUser" class="subMenu">Delete User</label>
        <input type="radio" name="DeleteUser" value="1" <?php if($row['DeleteUser']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="DeleteUser" value="0" <?php if($row['DeleteUser']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>
      
      <label for="Setting"><b>Setting<b></label>
          <input type="radio" name="Settings" value="1" <?php if($row['Settings']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="Settings" value="0" <?php if($row['Settings']==0){ ?>  checked  <?php }?>><small>off</small>
      <br>&nbsp &nbsp
       <label for="EmailSetting" class="subMenu">Email Setting</label>
        <input type="radio" name="EmailSetting" value="1" <?php if($row['EmailSetting']==1){ ?>  checked  <?php }?>><small>on</small>
        <input type="radio" name="EmailSetting" value="0" <?php if($row['EmailSetting']==0){ ?>  checked  <?php }?>><small>off</small><br>
      
      <label for="SupportSuite"><b>Support Suite<b></label>
          <input type="radio" name="SupportSuite" value="1" <?php if($row['SupportSuite']==1){ ?>  checked  <?php }?>><small>on</small>
          <input type="radio" name="SupportSuite" value="0" <?php if($row['SupportSuite']==0){ ?>  checked  <?php }?>><small>off</small>

      <br><br>
      <input type="submit" name="submit" value="Save Permission" class="btn btn-primary btn-sm">
    <br><span id="denied"></span>



    </form>
  </div>

<?php 
 if($user['admin_Id']==46)  {
      ?>
       <script type="text/javascript">
               $("#denied").html("New User Registration is Disable.You are login with demo account");
              </script>
      <?php 
  }	
if($_SERVER['REQUEST_METHOD']=="POST" && $user['admin_Id']!=46){
  $Deshboard= mysqli_real_escape_string($conn,$_POST['Deshboard']);
  $Portfolio= mysqli_real_escape_string($conn,$_POST['Portfolio']);
  $Graph= mysqli_real_escape_string($conn,$_POST['Graph']);
  $Userstate= mysqli_real_escape_string($conn,$_POST['Userstate']);
   $General= mysqli_real_escape_string($conn,$_POST['General']);
  $Category= mysqli_real_escape_string($conn,$_POST['Category']);
  $AddNewCategory= mysqli_real_escape_string($conn,$_POST['AddNewCategory']);
  $NewsArticle= mysqli_real_escape_string($conn,$_POST['NewsArticle']);
  $AddNewArticle= mysqli_real_escape_string($conn,$_POST['AddNewArticle']);
  $EditArticle= mysqli_real_escape_string($conn,$_POST['EditArticle']);
  $DeleteArticle= mysqli_real_escape_string($conn,$_POST['DeleteArticle']);
  $AdChannel= mysqli_real_escape_string($conn,$_POST['AdChannel']);
  $SEO= mysqli_real_escape_string($conn,$_POST['SEO']);
  $Analytics= mysqli_real_escape_string($conn,$_POST['Analytics']);
  $UserManagement= mysqli_real_escape_string($conn,$_POST['UserManagement']);
  $AddNewUser= mysqli_real_escape_string($conn,$_POST['AddNewUser']);
  $SetUserPermission= mysqli_real_escape_string($conn,$_POST['SetUserPermission']);
  $DeleteUser= mysqli_real_escape_string($conn,$_POST['DeleteUser']);
  $Setting= mysqli_real_escape_string($conn,$_POST['Settings']);
  $SupportSuite= mysqli_real_escape_string($conn,$_POST['SupportSuite']);
  $EmailSetting=mysqli_real_escape_string($conn,$_POST['EmailSetting']);
  
  $query2= "UPDATE role SET Portfolio='$Portfolio', Deshboard='$Deshboard', Graph='$Graph', Userstate='$Userstate', General='$General', Category='$Category', AddNewCategory='$AddNewCategory', NewsArticle='$NewsArticle' , AddNewArticle='$AddNewArticle', EditArticle='$EditArticle', DeleteArticle='$DeleteArticle',  Advertizement='$AdChannel', SEO='$SEO', Analytics='$Analytics', UserManagement='$UserManagement', AddNewUser='$AddNewUser',SetUserPermission='$SetUserPermission', DeleteUser='$DeleteUser', Settings='$Setting', SupportSuite='$SupportSuite',EmailSetting='$EmailSetting'   WHERE adminID='$id'";
  
  if(mysqli_query($conn,$query2)){
    
        die();    
    
  }else{
    echo "something wrong";
    echo "Exception".mysqli_error($conn);
  }
}

?>
 </main>















 <?php }?>
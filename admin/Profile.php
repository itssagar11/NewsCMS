<?php
require('includes/header.php');
require('includes/config.php');
$id=$user['admin_Id'];
if(!$result=mysqli_query($conn,"SELECT * FROM admin where admin_Id='$id'")) echo mysqli_error($conn);
if(!$result=mysqli_fetch_ASSOC($result)) echo "<script>console.log('<php echo')</script>"; ;
		
?>
<link rel="stylesheet" type="text/css" href="admin/style/profile.css">
<main>
	<center>
      <h3>
          Update Your Profile
        </h3>
        <div class="img-upload" style="width:80%; position:relative; margin:30px;" >
        	<form id="imgform">
            <input type="file" class="custom-file-input img-upload" name="image" id="image"><br>
            <input type="hidden"  name="id" id="id" value="<?php echo $id; ?>" >
            <input type="submit"class="btn btn-sm btn-primary img-upload" name="" id="but_upload" value="Upload">
        </form>
        </div> 
        </center>
      <hr>
      <div class="profile-container">
        
        <div class="items">
        	<!-- Password -->
            <div class="password">
            <label>Current Password</label> <span class="glyphicon glyphicon-pencil" style="float:right;">edit</span> 
          <input type="password" id="current" value="">
        </div>
        <div class="password">
           <label>New Password</label>  <span class="glyphicon glyphicon-pencil" style="float:right;">edit</span>

          <input type="password" id="new"value=" " required >
        </div> 
<center>
         <button class="btn btn-warning btn-sm password" id="btn-password"> Change Password
          
        </button>
    </center>


        <div style="display:flex; flex-wrap:nowrap;  justify-content:space-between; margin-bottom:25px;">
          <img  class="profile"src="<?php echo $result['ProfilePhoto'] ?>" value="<?php echo $user['ProfilePhoto'] ?>" id="profilePic" style="width:80px;height:80px; border-radius:50%;">
          <div class="profile">
            <h3>
              <?php echo $result['Name'] ;?>
            </h3>
            <button type="button" class="btn btn-xs btn-danger" id="btn_profileImg"> Change Profile Picture</button>
            
          </div>
        </div>
          <div class="profile">
             <label>Bio</label><span class="glyphicon glyphicon-pencil" style="float:right;">edit</span> <br>       
          <textarea id="bio" style="width:100%;"><?php echo $result['Bio']; ?></textarea>
          </div>
         
        </div><div class="items">
        <div class="profile">
          <label>Name</label>  <span class="glyphicon glyphicon-pencil" style="float:right;">edit</span> <br>     
          <input type="text" value=" <?php echo $result['Name'] ;?>" id="name">
        </div>
          <div class="profile">
            <label>Username</label> <span class="glyphicon glyphicon-pencil" style="float:right;">edit</span> 
          <input type="text" value=" <?php echo $result['Username'] ;?>"  id="username">
        </div>
        <div class="profile">
           <label>Email</label>  <span class="glyphicon glyphicon-pencil" style="float:right;">edit</span>
          <input type="text" value=" <?php echo $result['Email'] ;?>" id="email">
        </div>
        
       <button class="profile btn" id="btn-pass">Change Password</button><br><br><center>
           <button class="btn btn-success btn-sm profile" id="btn_profile"> Save Changes
          
        </button>
        <span id="msg"></span>


        </center>
        </div>
        

      </div>
      
    </main>
    <script>
    	$(document).ready(function(){


    	$("#btn-pass").click(function(){
    		
    		$(".profile").hide();
    		$(".password").show();
    		$("h3").html("Change password");
    	});
    	$("#btn-password").click(function(){
    	    	var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		    $("#msg").html("<span style='color:red'>Permission denied. You are login using demo account.</span><br>");
    		    return;
    		}
    		var currentpass=$("#current").val().trim();
    		var newpass=$("#new").val().trim();
    		var id="<?php echo $user['admin_Id']; ?>"
    		$.ajax({
    			url:'admin/includes/password_update.php',
    			type:'post',
    			data:{current_pass:currentpass,newpass:newpass,id:id},
    			success:function(response){
						if(response==1){
                                $("#msg").html("<span style='color:green;'>Save changes</span>");
						}else if(response==-1){
							$("#msg").html("<span style='color:red;'>Empty credential</span>");
						}else{
$("#msg").html("<span style='color:red;'>Invalid current password</span>");
						}

    			}
    		});
    	});
    	$("#btn_profile").click(function(){
    	    	var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		    $("#msg").html("<br><span style='color:red'>Permission denied. You are login using demo account.</span><br>");
    		    return;
    		}
    		var image='0';
    		var image=$("#image").val().trim();
    		var bio=$("#bio").val().trim();
    		var name=$("#name").val().trim();
    		var username=$("#username").val().trim();
    		var email=$("#email").val().trim();
    		var id="<?php echo $user['admin_Id']; ?>"
    		var profile=$("#profilePic").val();

    		$.ajax({
    			url:'admin/includes/profile_update.php',
    			type:'post',
    			data:{name:name,username:username,email:email,id:id,bio:bio},
    			success:function(response){
    			if(response==1){
    			    window.location.href="admin/deshboard.php";
    			}
    			}
    		});
    	});
    	$("#btn_profileImg").click(function(){
    		
    		$(".profile").hide();
    		$(".password").hide();
    		$(".img-upload").show();
    		$("h3").html("Upload Profile Pic");
    	});   
    	$("#imgform").on("submit",function(e){
    		e.preventDefault();
    		
    		$.ajax({
    			url:"admin/includes/profilePicture_upload.php",
    			type:"POST",
    			data:new FormData(this),
    			contentType:false,
    			processData:false,
    			success:function(response){
    				location.reload();
    			}
    		});
    	});
    	}); 	
    </script>
  </body>
</html>
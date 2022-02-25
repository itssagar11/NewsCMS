<?php
require('../includes/header.php');
require('../includes/config.php');
?>
<?php
 if($user['EmailSetting']==1){
 	$result=mysqli_query($conn,"SELECT * FROM emailconfiguration");
 	$result=mysqli_fetch_assoc($result);

 ?>
 <style type="text/css">
 	.container{
 		background-color:#ffffff;
 		padding:10px 18px;
 		overflow: hidden;
 		width:99%;
 		display:flex;
 		flex-wrap: wrap;
 	}
 	.item{
 		margin:auto;
 		width:50%;

 	}
 	input{
 		padding:8px 2px;
 		width:300px;
 		margin:2px;
 		border:none;
 		border-bottom:1px solid #000000;
 
 	}
 	td{
 		padding:5px;
 	}
 	input:focus{
 		outline:none;
 		border:none;
 	}
 	.item2{
 		padding:8px;
 	}
 	
 	@media only screen and (max-width:768px){
 		.item{
 			width: 100%;
 		}
 		.item2{
 			
 		}
 		input{
	 		padding:8px 2px;
	 		width:100%;
	 		margin:2px;
	 		border:none;
	 		border-bottom:1px solid #000000;	
	 
 	}
 		td{
 			padding: 1px;
 		}
 	}
 </style>
<main>
    	<span id="msg"></span>
<h3> Email Configuration</h3><br>
	<div class="container">

		<div class="item">

			<table>

				<tr>
					<td><b>MaiL server</b></td>
					<td><input type="text" id="server" value="<?php echo $result['mailserver']; ?>"></td>
				</tr>
				<tr>
					<td><b>Smtp Port</b></td>
					<td><input type="text" id="smtp" value="<?php echo $result['smtpport']; ?>"></td>
				</tr>
				<tr>
					<td><b>Display Name</b></td>
					<td><input type="text" id="name" value="<?php echo $result['name']; ?>"></td>
				</tr>
				<tr>
					<td><b>username</b></td>
					<td><input type="text" id="username" value="<?php echo $result['username']; ?>"></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td><input type="text" id="email" value="<?php echo $result['email']; ?>"></td>
				</tr>
				<tr>
					<td><b>Password</b></td>
					<td><input type="password" id="password"></td>
				</tr>
				<tr>
					<td>
					</td>
					<td><center>
			<button type="button" class="btn btn-success 		 btn-xm" id="btn_save">Save Changes</button><br>
		
		</center>
	</td>
</tr>
			</table>
			
		</div>
		<div class="item item2">
			  <h3>Tips</h3>
        
        <table  class="table table-responsive table-border"> 
          <thead><th>Gmail setting:</th></thead>
          <tr>
            <td>Mail Server</td>
            <td>  smtp.gmail.com</td>
          </tr>
          <tr>
            <td>SMTP Port</td>
            <td>  587</td>
          </tr>
        </table >
        <small style="color: red;"><b>Q.</b>The SMTP server requires a secure connection or the client was not authenticated. The server response was: 5.5.1 Authentication Required</small>
        <br>
        <small style="color: green;"><b>Solution</b></small>
        <ul>
          <li>case 1: when the password is wrong</li>
          <li>case 2: go to security settings at the followig link <a href="https://www.google.com/settings/security/lesssecureapps"> https://www.google.com/settings/security/lesssecureapps</a> and enable less secure apps . So that you will be able to login from all apps.</li>
        </ul>
        
	</div>
	<script type="text/javascript">
		$("#btn_save").click(function(){
		    	var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		    $("#msg").html("<span style='color:red'> </span><br>");
    		    	$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#C63100;'>Permission denied.</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> You are login using demo account.</div></div></div>");
    		    return;
    		}
			var mailServer= $("#server").val();
			var smtp= $("#smtp").val();
			var name= $("#name").val();
			var username= $("#username").val();
			var email= $("#email").val();
			var password= $("#password").val();
			$.ajax({
				url:'admin/EmailSetting/updateEmail.php',
				type:'post',
				data:{mailserver:mailServer,smtp:smtp,name:name,username:username,email:email,password:password},
				success:function( e){
				    console.log(e);
						if(e==1){
							$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> SMTP credential save successfully.</div></div></div>");
						}else if(e==-1){
							$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#C63100;'>Something Wrong</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> You do not enter Password. Please enter Password.</div></div></div>");
						}

				}
			});
		});
	</script>
</main>
<?php } ?>
</body>
</html>

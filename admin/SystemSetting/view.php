<?php 
require("../includes/header.php"); 
require("../includes/config.php") ; 
 if($user['SystemSetting']==1){
 	$result="SELECT * FROM systemsetting";
 	$result=mysqli_query($conn,$result);
 	$result=mysqli_fetch_assoc($result);

?>
<style type="text/css">
	.container{
		background-color: #ffffff;
		width: 80%;
		padding: 10px;s
	}
	@media only screen and (max-width:769px){
		.container{
			width:99%;
		}
	}
</style>
<main>
	<h3>System Setting</h3>
	<div class="container">
		<table class="table">
			<tr>
				<td>Two-factor Authentication</td>
				<td><select name="otp" id="otp">
					<option name="otp" value="<?php echo $result['otp_authentication']; ?>"><?php 
					 if($result['otp_authentication']==1) 
					 	echo "enable"; 
					 else echo "disable" ; ?></option>
					<option name="otp" value="1">enable</option>
					<option name="otp" value="0">disable</option>
				</select></td>
			</tr>
			<tr>
				<td>Invalid Password limit</td>
				<td><select id="invalidpassword">
					<option value="<?php echo $result['invalidPasslimit']; ?>"><?php echo $result['invalidPasslimit']; ?></option>
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="8">8</option>
					<option value="10">10</option>
					<option value="20">20</option>
				</select></td>
			</tr>
			<tr>
				<td>Application Theme</td>
				<td><select id="theme">
					<option value="<?php echo $result['systemTheme']; ?>"><?php 
					 if($result['systemTheme']=='#222222') 
					 	echo "Black"; 
					 else echo "White" ; ?></option>
					<option value="#000000">Black</option>
					<option value="#FFFFFF">White</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td>
					</td>
			</tr>
		</table>
		<center><button type="button"  id="btn_save"class="btn btn-success btn-sm"> Save Change</button><br><i>
			<span id="msg"></span>
		</center>
	</div>
</main>
<?php } ?>
<script type="text/javascript">
	$("#btn_save").click(function(){
	    	var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		    $("#msg").html("<span style='color:red'>Permission denied. You are login using demo account.</span><br>");
    		    return;
    		}
			var otp= $("#otp").val();
			var invalid=$("#invalidpassword").val();
			var theme=$("#theme").val();
			console.log(otp);
			$.ajax({
				url:'admin/SystemSetting/update.php',
				type:"POST",
				data:{
					otp:otp,invalid:invalid,theme:theme
				},
				success:function(r){
						$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> System setting update successfully.</div></div></div>");
				}
			});
	});
</script>
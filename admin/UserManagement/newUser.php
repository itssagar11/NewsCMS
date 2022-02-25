<?php
require('../includes/header.php');
require('../includes/config.php');
?>
 <?php
	if($user['AddNewUser']==1){
 ?>
<style type="text/css">

	.grid-container{
		
    border-radius: 5px;
     width: 700px;
  padding: 60px;

    margin:auto;
  background-color: #ffffff;

	}
	label{
		font-family: monospace;
	}
	.form{
		padding:5px;
		border:none;
		border-bottom:1px solid black;
		width:95%;
		margin:5px 0px;	

	}
	.form:focus{
		outline:#000000	;
		border:none;
		border-bottom: 1px solid black;
		width:99%;
	}

label{
	font-size: 16px;
}
	@media screen and (max-width: 763px){
		.grid-container{
			box-sizing: border-box;
			padding: 12px;
			width: 100%;
			height:100%;
		}
	}
		.grid-box{
			grid-template-columns: auto;
			width: 100%;
		}
	}
</style>

<main>
	<?php
	function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%*';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$pass= randomPassword();
	?>
	<form method="POST">
		<fieldset>
			<legend> <span class="fa fa-user"></span> Add New User</legend>
			<div class="grid-container">
			<div class="grid-box">

			
			<label class="form-grid">Name</label>
			<input class="form-grid form"  type="text"  required name="Name"  >
			<label class="form-grid">Username</label>
			<input class="form-grid form" required  type="text" name="Username" >
			
		
		
			
			<label class="form-grid">Email</label>
			<input class="form-grid form"  type="email" required name="Email" >
			<label class="form-grid">Phone Number</label>
			<input  class="form-grid form" type="tel" required="" name="PhoneNo" >
			<label class="form-grid">Role</label>
			<input  class="form-grid form" type="text" name="Role" list="Role">
				 <datalist id="Role">
				
				<option value="Admin">
				<option value="Manager">
				<option value="Editor">
				<option value="Writer">
				</datalist>
			<label class="form-grid">Password</label>
			<input class="form-grid form"  type="text" name="Password" value="<?php echo $pass ?>" readonly>
			<br><br>
		<center><input type="submit" name="submit" value="Register" class="btn btn-sm btn-success ">
	    <br><span id="denied"></span>
		</div>
			
		</div>

			
		</fieldset>
	</form>
<?php 
  if($user['admin_Id']==46)  {
      ?>
       <script type="text/javascript">
               $("#denied").html("New User Registration is Disable.You are login with demo account");
              </script>
      <?php 
  }	
if($_SERVER['REQUEST_METHOD']=="POST" && $user['admin_Id']!=46){
	$Name= mysqli_real_escape_string($conn,$_POST['Name']);
	$Username= mysqli_real_escape_string($conn,$_POST['Username']);
	$Email= mysqli_real_escape_string($conn,$_POST['Email']);
	$PhoneNo= mysqli_real_escape_string($conn,$_POST['PhoneNo']);
	$Role= mysqli_real_escape_string($conn,$_POST['Role']);
	$query= "INSERT INTO admin (Name, Username, Email, PhoneNo, Role, Password) values ('$Name', '$Username', '$Email', '$PhoneNo','$Role','$pass')";
	if(mysqli_Query($conn,$query)){
		?>
		
		 <script type="text/javascript">
                window.location.href="https://sagarbisht.com/admin/UserManagement/view";
              </script>
<?php
	}else{
		echo "something wrong";
		echo "Exception".mysqli_error($conn);
	}
}

?>
</main>




 <?php }?>
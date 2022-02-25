<?php
require('../includes/header.php');

?>
 <?php
if($user['UserManagement']==1){
 ?>
<style type="text/css">
.container-user{
	border-radius: 2px;
	border-top:1px solid #000000;
	padding: 15px;
	box-sizing: border-box;
	width: 100%;
	overflow-x: scroll;
	background-color: #ffffff;
}
.status{
	width: 10px;
	height: 10px;
	background-color: red;
	border-radius: 50%;
	margin: auto;
}


</style>
<main>
	<div class="page-header">
		<h2>Users</h2><?php if($user['AddNewUser']==1){ ?><a href="admin/UserManagement/newUser.php" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span> Add New User</a><?php } ?>
	</div>

		
		<div class="container-user">
			
				<input id="myInput" type="text" placeholder="Search.." class="form-control"><br>
				<script type="text/javascript">
					$(document).ready(function(){
  					$("#myInput").on("keyup", function() {
   					 var value = $(this).val().toLowerCase();
   					 $("#myTable tr").filter(function() {
    			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   						 });
 						 });
						});
				</script>

				<table class="table table-responsive table-success "> 
				 <thead>
					<tr class="active" >
						<th >User ID</th>
						<th>User Name</th>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Email Address</th>
						<th>User Role</th>
						<th>Status</th>
						<th>Action</th>
					
					</tr>
				</thead>
					
				 <tbody id="myTable">				
						
 				</tbody>

				</table>
				
			
	</div>
		

</main>

<script type="text/javascript">
	$(document).ready(function(){
			update_table();
	});
	function update_table(){
		$.ajax({
			url:'admin/UserManagement/update_user_state.php',
			success:function(result){
					$("#myTable").html(result);
			}
		});
	}
	setInterval(function(){
		update_table()
	},5000);
</script>
<?php }?>
</body>
</html>
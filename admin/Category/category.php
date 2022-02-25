<?php
require('../includes/header.php');
require('../includes/config.php');
?>
 <?php
if($user['Category']==1){
  ?>
<style type="text/css">
.category-flex{
  display: flex;
  justify-content: space-around;
   width: 100%;
}
.category-flex-item{
	width:80%;
}
 input[type="text"],input[type="password"]{
                  margin:2px 1px 15px 1px;
        width:100%;
        height:30px;
        padding:2px 2px;
       
        
        }
        input:focus{
        outline:none;
        width:100%;
      }


.form{
	
	padding: 15px;
	border-radius: 5px;
	background-color: #ffffff;
}

td{
	background-color: #ffffff;
}

.success{
	display: none;
	
}
#addCategory{
	display:none;
}
@media screen and (max-width: 745px){
	.category-flex-item{
  
  width:98%;
  
}

}

</style>
<main>
	<div class="container-fluid">
		<h2>Category</h2>
		<?php if($user['Newcategory']==1){ ?>
		<button style="float:right;"type="button" class="btn btn-xs btn-warning" id="add"><span class="glyphicon glyphicon-plus"></span> Add New Category</button>
		<?php } ?><br><br>
		<div class="category-flex">

			<!-- Add category -->
			<div class="category-flex-item " id="addCategory">
				
				
				<div class="form">
					<div class="alert alert-success success">
      				<strong>New category added successfully.</strong>
      			 </div>
				 	<div class="form-group">
				 		<label for="name">Name</label>
				 		<input type="text"  id="name" name="name" class="form-control">
				 		<small>The name is how it appears on your site</small>
				 	</div>
				 	<div class="form-group">
				 		<label for="slug">Slug</label>
				 		<input type="text" id="slug" class="form-control">
				 		<small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens</small>
			 	</div>
					<div class="form-group">
				 		<label for="color">Color</label>
				 		<input type="color" id="color" class="form-control">
				 		
			 	</div>
				 	<div class="form-group">
				 		<label for="description">Description</label>
				 		<textarea class="form-control" id="description" rows="5"></textarea>
				 		<small>The description is not mendatory; however, it is good practice.</small>
				 	</div>
				 	<div class="form-group">
				 		<center>
				 		<button type="buttom"  class="btn btn-primary btn-sm" id="submit">Add New Category</button>
				 		</center>
				 	</div>
				 	<center><span id="msg"> </span></center>	

				
			</div>
			</div>
		
			<!--View Category--->
			<div class="category-flex-item" id="viewCategory">
				<input id="myInput" type="text" placeholder="Search.." class=""><br>

 				<div class="panel panel-primary">
  					<div class="panel-heading">Panel Heading</div>
				<table class="table table-responsive table-hover">
				 <thead>
					<tr class="active">
						<th>Name</th>
						<th>Count</th>
						<th>Color</th>
					
					</tr>
				</thead>
					<?php
					$query1= "SELECT * FROM category Order by id DESC";
					$result= mysqli_query($conn,$query1);
					if(mysqli_num_rows($result)>0) {
						while ($row=mysqli_fetch_assoc($result)) {
					
					?>
				 <tbody id="myTable">				
					<tr>
						<td><?php echo $row["name"];?> </td>
						<td><?php $n=$row["name"];$query="SELECT count(*) as total from article where category='$n'";
								$re= mysqli_query($conn,$query); 
								 $re=mysqli_fetch_ASSOC($re);
								 echo $re['total']; ?> </td>
						<td><span style="width:20px;height:10px; color:<?php echo $row["color"];?>;background-color:<?php echo $row["color"];?>;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span> </td>
						
					   <?php }}?>
					</tr>  
 				</tbody>

				</table>
			</div>
		</div>
			
			
	</div>
	
 
</main>
<script type="text/javascript">
		$(document).ready(function(){
  			$("#myInput").on("keyup", function() {
   				var value = $(this).val().toLowerCase();
   				$("#myTable tr").filter(function() {
    			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   				});
 			});
		});
		$("#add").click(function(){
			$('#viewCategory').hide();
			$('#add').hide();
			$('#addCategory').show();
			$('h2').html("Add New Category");
		});

		$("#submit").click(function(){
		    var admin_id=<?php echo $user['admin_Id']; ?>;
		    if(admin_id==46){
		        $("#msg").html("<span style='color:red'>You are login using demo account. Permission denied</span>");
		        return;
		    }
    		var name= $("#name").val();
    		var slug= $("#slug").val();
    		var color= $("#color").val();
    		var description= $("#description").val();
    		console.log(admin_id);
    		
    		$.ajax({
    			url:"admin/Category/add_new_category.php",
    			type:"POST",
    			data:{name:name,slug:slug,color:color,description:description},
    		
    			success:function(response){
    			    console.log(response);
    				if(response==-1){
    					$("#msg").html("<span style='color:red'>You don't fill all details</span>");
    				}else if(response==0){
    					$("#msg").html("<span style='color:red'>Already Category Exist</span>");
    				}else{
    				    
    					location.reload();
    				}
    			}
    		});
    	});
		
</script>
<?php } ?>
</body>
</html>
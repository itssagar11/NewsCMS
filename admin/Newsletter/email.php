<?php
require("../includes/config.php");
require("../includes/header.php");
if($user['compose']!=1){
		echo "Permission denied";
}else{
	$trigger=mysqli_query($conn,"SELECT * FROM subscribers");
	
	
?>
<style type="text/css">
	.in-container{
		width:98%;
	}
</style>
<main>
	 <ul class="breadcrumb">
  <li><a href="admin/deshboard.php">Home</a></li>
  <li><a href="admin/Newsletter/view.php">Newsletter</a></li>
  <li><a href="admin/Newsletter/email.php">Send Mail</a></li>
  
 </ul>
	<div class="container-fluid">
		<h2>Send Mail </h2>
		<div class="in-container">

		</div>
	</div>
</main>
<script type="text/javascript">
	 $("#search").on("keyup", function() {
       var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
      });
</script>


<?php } ?>
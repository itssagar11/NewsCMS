<?php
require("../includes/config.php");
require("../includes/header.php");
if($user['Newsletter']!=1){
		echo "Permission denied";
}else{
	$trigger=mysqli_query($conn,"SELECT * FROM subscribers");
	
	
?>
<style type="text/css">
	.in-container{
		width:98%;
	}
	.table{
    		background-color: #ffffff;
            width:95%;
            font-size:14px;
            color:#135EA3;
             border:none;
             padding:0px;
    	}
    .action-md{
    	display:none;
    }
    @media screen and (max-width: 769px){
    	.action-md{
    	display:inline;
    	}
    	.action-lg{
    		display:none;
    	}

    }
</style>
<main>
	 <ul class="breadcrumb">
  <li><a href="admin/deshboard.php">Home</a></li>
  <li><a href="admin/Newsletter/view.php">Newsletter</a></li>
  
 </ul>
	<div class="container-fluid">
		<h2>Subscribers <?php if($user['Bulkmail']==1){ ?> <a href="admin/Newsletter/Bulkmail.php" class="btn btn-default btn-sm" style="border:1px solid #337AB7;"> Bulk Mail Send</a><?php }?></h2>
		<div class="in-container">
			<input type="text" id="search" placeholder="Search.." class="form-control">
			<br>
			 <table class="table table-responsive" id="myTable">
                            <tr>
                                <th>Name</th>
                                <th>Mail adress</th>
                                <th class="action-lg"><center>Action</center></th>
                            </tr>
                            <?php while($result=mysqli_fetch_assoc($trigger)){ ?>
                            <tr>
                            	<td> <?php echo $result['Name']; ?> <br>
                            		<div class="action-md">
                            			<small>
                            				<?php if($user['compose']==1){ ?>
                                            <a href="admin/Newsletter/compose.php?email=<?php echo $result['Email'] ?>&name=<?php echo $result['Name']; ?>">Compose </a> <?php }?>
                                        </small>|
                                          <small>
                                          	<?php if($user['compose']==1){ ?>
                                            <a href="admin/Newsletter/delete.php?id=<?php echo $result['id'] ?>" style="color:red;">Delete </a>
                                        <?php }?>
                                        </small>
                                      </div>
                            	</td>

                            	<td><?php echo $result['Email']; ?></td>
                            	<td class="action-lg"><center>
                            		<?php if($user['compose']==1){ ?>
                            		<a href="admin/Newsletter/compose.php?email=<?php echo $result['Email'] ?>">Compose </a>
                            		<?php }?> 
                            		&nbsp&nbsp&nbsp&nbsp&nbsp  |&nbsp&nbsp&nbsp&nbsp
                            		<?php if($user['deletemail']==1){ ?>
                            		<a href="admin/Newsletter/delete.php?id=<?php echo $result['id'] ?>" style="color:red;">Delete </a>
                            	<?php } ?>
                            	</center>
                            	</td>
                            </tr>
                        <?php } ?>
                        </table>
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
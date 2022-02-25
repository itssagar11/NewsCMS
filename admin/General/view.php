<?php
require('../includes/header.php');
require('../includes/config.php');

 if($user['General']==1){

?>
	<style type="text/css">
		.btn{
				border:1px solid #6B5CFF;
		}
		.detail-container-container{
			display:flex;
			flex-wrap: wrap;
			justify-content: space-between;
			border-top:2px solid #000000;
		}
		.detail-container{
			width:50%;
			background-color:#ffffff;
			
		}
		.table{
			background-color: #ffffff;
			
			border-radius: 4px;
			 padding: 5px;
		}
		.form-control{
			border:1px solid #000000;
		}
		.form-control:focus{
			border:1px solid #000000;
		}
		.fa {
		  padding: 2px;
		  font-size: 30px;
		  width: auto;
		  text-align: center;
		  text-decoration: none;
		  margin: auto;
		  border-radius: 50%;
		}

@media screen and (max-width: 763px)
	 {
	 	.detail-container{
			width:100%;
		}
	  .table{
	    width:100%;
	   
	  }
	}
	</style>
</head>
<body>
	<main>
		
		<span class="fa fa-id-card" style="font-size: 24px;">General Setting</span> <button type="button" id="submit" class="btn btn-primary btn-sm">Save Changes</button><span id="alert"></span>
		<br><br>
		<div class="detail-container-container">
		<div class="detail-container">

			<table class="table table-responsive">
				
				<?php
					$query="SELECT * FROM companyprofile";
					$result=mysqli_query($conn,$query);
					if (mysqli_num_rows($result)>0) {
						$row=mysqli_fetch_assoc($result);

					
				?>
				<tr>
					<small> Gerernal Details</small>
				</tr>
				<tr>
					<td><span class=" fa fa-paragraph" style="font-size:18px;"></span>Company Name</td>
					<td> <input type="text" name="name" id="name" class="form-control" value="<?php echo $row["CompanyName"]?>"> </td>
				</tr>
					<tr>
					<td><span class=" fa fa-list-alt" style="font-size:18px;"></span>Address</td>
					<td><input class="form-control" type="text" id="address" value="<?php echo $row['Address']?>"td>
				</tr>
					<tr>
					<td><span class=" fa fa-mobile-phone" style="font-size:18px;"></span>Mobile No</td>
					<td><input class="form-control" type="tel" id="number" value="<?php echo $row["MobileNo"]?>"></td>
				</tr>
				<tr>
					<td><span class=" fa fa-volume-control-phone" style="font-size:18px;"></span>Landline No</td>
					<td><input class="form-control" type="tel" id="telephone" value="<?php echo $row["LandlineNo"]?>"> </td>
				</tr>
					<tr>
					<td><span class=" fa fa-envelope-open" style="font-size:18px;"></span>Email</td>
					<td> <input class="form-control" type="email" id="email" value="<?php echo $row["Email"]?>"></td>
				</tr>
					<tr>
					<td><span class=" fa fa-bars" style="font-size:18px;"></span>CIN</td>
					<td><input type="text" id="CIN" class="form-control" value="<?php echo $row["CIN"]?>"></td>
				</tr>
				<tr>
					<td><span class=" fa fa-building" style="font-size:18px;"></span>GSTIN</td>
					<td> <input type="text" class="form-control"id="GSTIN" value="<?php echo $row["GSTIN"]?>"></td>
				</tr>
				<tr>
					<td><span class=" fa fa-certificate" style="font-size:18px;"></span>PAN</td>
					<td> <input type="text" id="PAN" class="form-control" value="<?php echo $row["PAN"]?>"> </td>
				</tr>
				</tr>
					<tr>
					<td><span class=" fa fa-info" style="font-size:18px;"></span>Incorporation Date</td>
					<td><input type="date" id="INDate" value="<?php echo $row["IncorporationDate"]?>" class="form-control"></td>
				</tr>
			</table>
		<?php }?>
		
			<?php }
			else{
				echo "<script>Console.log('Permission Restricted')</script>";
			}
		?>

		</div>
		<div class="detail-container">
				<table class="table table-responsive">
					<tr>
					<small> Social Details</small>
				</tr>
						<tr>
					<td><span class="fa fa-facebook"></span>Facebook</td>
					<td><input class="form-control" type="text" id="Facebook" value="<?php echo $row["Facebook"]?>"></td>
				</tr>
				<tr>
					<td><span class="fa fa-twitter"></span>Twitter</td>
					<td><input class="form-control" type="text" id="Twitter" value="<?php echo $row["Twitter"]?>"></td>
				</tr>
				<tr>
					<td><span class="fa fa-instagram"></span>Instagram</td>
					<td><input class="form-control" type="text" id="Instagram" value="<?php echo $row["Instagram"]?>"></td>
				</tr>
				<tr>
					<td colspan="2"><span class="fa fa-bookmark" style="font-size:20px;"></span>About<br><textarea class="form-control" rows="12" id="about"><?php echo $row['About']; ?></textarea></td>
				</tr>

				<tr>
				</tr>
				</table>
		</div>
		<i></i><h4> Terms & Condition</h4>
		<textarea class="form-control" rows="8" id="terms"> <?php echo $row['Terms']; ?></textarea>
	</div>	
	</main>
	<script type="text/javascript">
		$(document).ready(function(){


		
			$("#submit").click(function(){
			    $("#submit").text("please wait..");
				
				var name=$("#name").val();
				var address=$("#address").val();
				var mobileno=$("#number").val();
				var landlineno=$("#telephone").val();
				var email=$("#email").val();
				var cin=$("#CIN").val();
				var gst=$("#GSTIN").val();
				var pan=$("#PAN").val();
				var indate=$("#INDate").val();
				var facebook=$("#Facebook").val();
				var twitter=$("#Twitter").val();
				var about=$("#about").val();
				var terms=$("#terms").val();
				var instagram=$("#Instagram").val();
				//console.log($("#number").val());
				$.ajax({
					url:'admin/General/update.php',
					type:"post",
					data:{name:name,address:address,mobileno:mobileno,landlineno:landlineno,email:email,cin:cin,gst:gst,pan:pan,indate:indate,facebook:facebook,twitter:twitter,about:about,terms:terms,instagram:instagram},
					success:function(response){
						if(response==1){
						$("#alert").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div style='font-size:12px;'> General Details update successfully.</div></div></div>");
						$("#submit").text("Save Changes");
						}
					}

				});


			});
			});
	</script>

</body>
</html>
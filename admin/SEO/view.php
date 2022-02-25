<?php
require('../includes/header.php');
require('../includes/config.php');
$result=mysqli_query($conn,"SELECT * FROM seo");
$result=mysqli_fetch_assoc($result);
?>
<?php
 if($user['SEO']==1){
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adsense</title>
<style type="text/css">
	.container{
		background-color: #ffffff;
		width: 90%;
		border-radius: 4px;
		box-sizing: border-box;
		padding: 10px;
	     }
	label{
		font-weight: normal;
	}
	@media screen and (max-width: 763px){
		.container{
			width:100%;
			border-bottom:1px solid #000000;
			border-radius:0px;
		}
	}
</style>
</head>
<main>
	
	<div class="row">
		<div style="height:40px; background-color:#ffffff; border-bottom:1px solid #000000;
			padding:5px;">
			<span id="msg"></span>
		<button id="save"  style="float:right;"		type="button" class="btn btn-success btn-sm" > Sava Changes</button>
	</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div style="display:flex; justify-content:auto; flex-wrap: wrap;" class="container">
				<div >
					<h4>logo</h4>
					<img src="<?php echo$result['logo']; ?>" id="logoview" width="100%" height="100">
					<form id="logoform">
						<input type="file" name="myimage">
						<input type="submit" class="btn btn-xs btn-danger" value="Upload logo" id="btn_logo">
					</form>
					<span id="msg"></span>
					<input type="text" name="" hidden disabled id="logoURL" value="<?php echo$result['logo']; ?>">

				</div>
				<div >
					<h4>Icon</h4>
					<center>
					<img src="<?php echo$result['icon']; ?>" width="100%" id="iconview" height="220">
				</center>
					<form id="iconform">
						<input type="file" name="myimage">
						<input type="submit" class="btn btn-xs btn-danger"  value="Upload logo"cid="btn_icon">
					</form>
					<input type="text" name="" hidden disabled id="iconURL" value="<?php echo$result['icon']; ?>">
				</div>
			</div>
				<div class="container">
					<h4>Sitemap</h4>
					<small>sitemap  provide information about specific types of content on your pages. We will manage your site sitemap automatically.</small><br>
					<br>
					<a href="https://sagarbisht.com/sitemap.xml" class="btn btn-success btn-xs">Downlaod Sitemap </a>
				</div>
				
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
			<div class="container">
				<h4>SEO </h4>
				<br>
				<form>
					<label>Site Title</label>
					<input type="text" id="sitetitle" class="form-control" value="<?php echo$result['title']; ?>"><br>
					<label>Sub Title</label>
					<input type="text" id="subtitle" class="form-control" value="<?php echo$result['subtitle']; ?>"><br>
					<label>SiteURL</label>
					<input type="text" id="siteURL" class="form-control" value="<?php echo$result['siteURL']; ?>"><br>
					<label> Site Description</label>
					<textarea class="form-control" rows="6" cols="5" value="." id="sitedescription"><?php echo$result['description']; ?></textarea><br>
					<label> Keyword</label>
					<textarea class="form-control" rows="3" cols="5"  id="sitekeyword"><?php echo$result['keyword']; ?></textarea><br>
					
					
				</form>
					
			</div>

		</div>

			
		
	</div>
<?php } ?>
</main>
<script type="text/javascript">
	$("#logoform").on("submit",function(e){
		e.preventDefault();
			var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		    $("#msg").html("<div class='alert ' id='alert'><h4 style='color:#c65353;'>Permission denied.</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>You are login using demo account.</div></div></div>");
    		    return;
    		}
		$.ajax({
			url:"admin/includes/featuredImg_upload.php",
			type:"post",
			data:new FormData(this),
			processData:false,
			contentType:false,
			success:function(response){
				$("#logoURL").val(response);
				$("#logoview").attr("src",response);

			}
		});
	});
		$("#iconform").on("submit",function(e){
		e.preventDefault();
			var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		   $("#msg").html("<div class='alert ' id='alert'><h4 style='color:#c65353;'>Permission denied.</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>You are login using demo account.</div></div></div>");
    		    return;
    		}
		$.ajax({
			url:"admin/includes/featuredImg_upload.php",
			type:"post",
			data:new FormData(this),
			processData:false,
			contentType:false,
			success:function(response){
				$("#iconURL").val(response);
				$("#iconview").attr("src",response);

			}
		});

	});
	$("#save").click(function(){
	    	var admin_id=<?php echo $user['admin_Id']; ?>;
    		if(admin_id==46){
    		   
    		    	$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#c65353;'>Permission denied.</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>You are login using demo account.</div></div></div>");
    		    return;
    		}
	    $("#save").text("Processing..")
		var sitetitle=$("#sitetitle").val();
		var subtitle=$("#subtitle").val();
		var siteURL=$("#siteURL").val();
		var sitedescription=$("#sitedescription").val();
		var sitekeyword=$("#sitekeyword").val();
		var iconURL=$("#iconURL").val();
		var logoURL=$("#logoURL").val();
		$.ajax({
			url:'admin/SEO/update.php',
			type:'POST',
			data:{
				sitetitle:sitetitle,subtitle:subtitle,siteURL:siteURL,sitedescription:sitedescription,sitekeyword:sitekeyword,logoURL:logoURL,iconURL:iconURL
			},
			success:function( response){
				if(response==1){
						$("#msg").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> SEO settings Update successfully.</div></div></div>")
			}

				}
					});
	});



</script>
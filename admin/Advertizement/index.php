<?php
require('../includes/header.php');
require('../includes/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adsense</title>
    <style type="text/css">
      .container {
        background-color: #ffffff;
        width: 90%;
        border-radius: 4px;
      }
      .box {
        background-color: #F7F7F7;
        box-sizing: border-box;
        padding: 8px;
        margin-bottom: 5px;
        display: block;
        border-radius: 5px;
      }
      small {
        color: grey;
      }
      @media screen and (max-width:768px){
        .container{
          width:100%;
        }
      }
    </style>
  </head>
  <main>
      <span id="alert"></span>
    <?php 
		$query= "SELECT * FROM adsense WHERE id='11'";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
		
		
	?>
	 <form action="" method="POST">
    <div class="container">
      <h3>Adsense</h3>
      <br />
      <p><b>ad-client id</b></p>
      <input type="text" class="form-control" name="ad-client" value="<?php echo $row['adclient']; ?>">

				
      
<br><br>
     

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p><b>horizontal code</b></p>
            <div class="box">
              <strong>Ad code</strong><br />
              <input type="text" class="form-control" name="horizontal" value="<?php echo $row['horizontaladd']; ?>">
                <br />
             
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p><b>Vertical</b></p>
            <div class="box">
              <strong>Ad code</strong><br />
              <input type="text"
                class="form-control"
                name="vertical"
                value="<?php echo $row['verticaladd']; ?>">
            <br/>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p><b>Square</b></p>
            <div class="box">
              <strong>Ad code</strong><br />
              <input type="text"
                class="form-control"
                value="<?php echo $row['squareadd']; ?>"
                name="square">
                <br/>
             
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p><b>Horizontal Sticky add</b></p>
            <div class="box">
              <strong>Ad code</strong><br/>
              <input type="text" class="form-control" name="sticky" value="<?php echo$row['horizontalstickyadd'];?>">
              <br/>
             
            </div>
          </div>
         
        <center>
          <input type="submit" id="save" class="btn btn-success " value="Save changes"/>
        </center>
      </form>
    </div>
   

    <?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    
         $adclient=mysqli_real_escape_string($conn,$_POST['ad-client']);
	   	$horizontal=mysqli_real_escape_string($conn,$_POST['horizontal']); 
	   	$vertical=mysqli_real_escape_string($conn,$_POST['vertical']);
	   	$square=mysqli_real_escape_string($conn,$_POST['square']); 
	   	$sticky=mysqli_real_escape_string($conn,$_POST['sticky']);
	   	$assoArray= array('horizontaladd' =>$horizontal , 
	   					  'verticaladd' =>$vertical ,
	   					  'squareadd' =>$square ,
	   					  'horizontalstickyadd' =>$sticky,
	   					  'adclient' =>$adclient
	   					);
	   	$jSON_Data= json_encode($assoArray,JSON_PRETTY_PRINT);
	   if($user['admin_Id']!=46){
	       	$query= "UPDATE adsense SET adclient='$adclient', horizontaladd='$horizontal', squareadd='$square' , verticaladd='$vertical', horizontalstickyadd='$sticky' where id=11 ";
	  		if(!mysqli_query($conn,$query)){
	  			echo "error ".mysqli_error($conn);
	  		}else{
	  			
	  		 if(file_put_contents("adsense.json",'{"items":['.$jSON_Data."]}")){
	  				?>
              <script type="text/javascript">
                $("#alert").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> Advertizement settings save successfully.</div></div></div>")
              </script>
            <?php 
	  			}else{
	  				echo "something wrong";
	  			}

	  		}
	   }else{ ?>
	        <script type="text/javascript">
                $("#alert").html("<div class='alert ' id='alert'><h4 style='color:#c46464;'>Permission Denied</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> You are login using demo account.</div></div></div>")
              </script>
              <?php
	   }
	  
	  	}
	  	


  ?></main>
  
</html>

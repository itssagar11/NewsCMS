
<!-- Copyright (c) 2021 Sagar Bisht  -->

<!-- --- ----- ----- --- -- - - - -- - -- - -->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
require('includes/header.php');
require('includes/config.php');
if($user['Deshboard']==0){
  echo "invalid page request";
  
}else{
  $articletotal= mysqli_query($conn,"SELECT id from article");
  $articletotal=mysqli_num_rows($articletotal);
   $categorycount= mysqli_query($conn,"SELECT name from category");
  $categorycount=mysqli_num_rows($categorycount);
   $usercount= mysqli_query($conn,"SELECT * from admin");
  $usercount=mysqli_num_rows($usercount);

?>
<link rel="stylesheet" type="text/css" href="admin/style/deshboard.css">
    </main>
<main>
      <div class="title-container">
        <div class="title">
          <span
            class="material-icons home-icon"
            style="background-color:#5cb85c; margin:auto; float:left;"
          >
            home
          </span>
          <div>
            <h3>
              Dashboard
            </h3>
            <small>A place where you can manage your content.</small>
          </div>
        </div>
        <div class="create-box">
          <a href="admin/Article/addnew.php" class="btn btn-warning btn-sm ">
            <span class="glyphicon glyphicon-plus"> </span>
            Create Article
          </a>
        </div>
      </div>
      <?php if($user['Portfolio']==1){

      ?>
      <div class="row detail-container">
        <h4>
          Portfolio
        </h4>
        <hr />
       <div class="detail">
         <div class="detail-item" style="">
           
             <span class="material-icons icon" style="background-color:#DC3B61; margin:auto; font-size:24px;  padding:15px;">
feed
</span>
           
           <div style="width:70%">
             <small>Article Published</small>
             <h1 style="margin:1px;">
               <?php echo $articletotal ?>
             </h1>
             
           </div>
           <div>
             <a href="admin/Article/view.php" style="color:#DC3B61;"> view</a>
           </div>
         </div>
         <div class="detail-item" style="">
           
             <span class="material-icons icon" style="background-color:#3F6AD8; margin:auto; font-size:24px;  padding:15px;">
category
</span>
           
           <div style="width:70%">
             <small>Article Category</small>
             <h1 style="margin:1px;">
                 <?php echo $categorycount ?>
             </h1>
 
           </div>
           <div>
             <a href="admin/Category/category.php" style="color:#3F6AD8;"> view</a>
           </div>
         </div>
         <div class="detail-item" style="">
           
             <span class="material-icons icon" style="background-color:#F7B924; margin:auto; font-size:24px;  padding:15px;">
group
</span>
           
           <div style="width:70%">
             <small>Total User</small>
             <h1 style="margin:1px;">
              <?php echo $usercount ?>
             </h1>
             
           </div>
           <div>
             <a href="admin/UserManagement/view.php" style="color:#F7B924;"> view</a>
           </div>
         </div>
           
         
        </div>
        </div>
      <?php }?>
      <br>
      <?php  if($user['Graph']==1){ ?>
        <h2>Realtime Overview</h2>
      <div style="display:flex; flex-wrap: wrap; justify-content:center;"> 

        <div class="realtime">
          <center>
         <h4 style="color:#000000;"> Active Visitors</h4><small>Within 10minutes</small>
         <h1 style="font-size:54px; color:#04A77A; border-bottom:1px dashed  blue; padding-bottom:15px;" id="isactive">wait..</h1>
        <br><br><br>
         <small style="color:#000000;  ">auto updata in 1 min</small>
         <br><br><br>
         <a href="admin/Analytics" > Goto Analytics</a>
       </center>
        </div>
        <div class="devices">
            <div id="piechart" style=
         "width: 100%; height:100%; padding:0px;"></div>
         </div>
       </div>
      <?php } ?>
        <?php if($user['Userstate']==1){
          ?>
        <div class="graph active-user">
          <hr>
          <h4>
            Active user
          </h4>
          <table class="table table-striped table-responsive" id="activeUser">

          </table>
            
        </div>
      <?php } ?>
      </div>
    </main>]

    <script>
      var di=1;
    	
    	function update_active_table(){
    		$.ajax({
    			url:'admin/UserManagement/update_active_table.php',
    			success:function(response){
    				$('#activeUser').html(response);
    			}
    		});
    		setInterval(function(){
    			update_active_table();
    		},25000);
    	}
      function update_realtime(){
        $.ajax({
          url:'admin/Analytics/realtime.php',
          success:function(response){
            var d=JSON.parse(response)
            $("#isactive").text(d.active);
            var di=d.PC;
            var m=d.mobile;
            var t=d.tablet;

             google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Device', 'Visitors'],
          ['Desktop',di],
          ['Mobile',m],
          ['Tablet', t]
        ]);

        var options = {
          title: 'Visitors Source',
          is3D: true,
          chartArea:{width:"80%",height:"80%"}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

          }
        });
        setInterval(function(){
          update_realtime();
        },58000);

      }
    
         
      //-- 
    </script>

    <script>
        $(function(){
            
        update_realtime();
         update_active_table();
        });
    </script>


    <?php } ?>
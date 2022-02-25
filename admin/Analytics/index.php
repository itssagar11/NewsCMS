<?php
require('../includes/header.php');
if(!$user['Analytics']==1){
echo "Invalid Request";
}else{
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style type="text/css">

	.flex-container{
		display:flex;
		flex-wrap: nowrap;
		justify-content: center;
		background-color: #ffffff;

	}
	.last7{
		width:700px;
		height:300px;
		background-color: #ffffff;
		border-radius:5px;
		margin-left: 5px;		

	}
	.today{
		width:230px;
		background-color: #ffffff;
		padding: 5px;
		border-radius:5px ;
	}
	.devices{
		width:450px;
		height: auto;
		overflow: auto;
		background-color: #ffffff;
		padding: 5px;
		border-radius:5px ;
		margin-top:10px; 
	}
	.table-responsive{
		padding: 0px;
		margin: 0px 5px;
	}
	.os{
		width:150px;
		background-color: #ffffff;
		padding: 8px;
		border-radius: 1px;
		height: 100px;
	}
	@media only screen and (max-width: 769px){
		.flex-container{
			flex-wrap: wrap;
			margin-top:8px; 
		}
		.last7{
		width:100%;
		height:auto;
	}
	.today{
			width:100%;
			margin-bottom: 5px;
	}
	.devices{
		width:100%;
	}
	.os{
		width:280px;
		display: block;
	}
	}
</style>
<main>
	<h2>Analytics</h2>
	<div class="flex-container">
			<div class="today">
				<h4> Today</h4>
				<h6> Total Visit: <span style="float:right; font-size:16px;" id="tvv"> 678</span></h6>
				<h6> Unique Visitors: <span style="float:right; font-size:16px;" id="uvv"> 678</span></h6>
				<h6> New Visitors:<span style="float:right; font-size:16px;" id="nvv"> 678</span></h6>
				<hr>
				<div id="piechart_3d" style="width: 100%; height: 300px;"></div>
			</div>	
			<div class="last7">
					<h4> Last 7 days</h4>
					<table class="table table-responsive">
						
						<tr>
							<td> <center>Total Views</center></td>
							<td>  <center>Unique Visitors</center></td>
							<td>  <center>New Visitors</center></td>
						</tr>
						<tr>
							<td> <center><h3 id="tvw">0</h3></center></td>
							<td> <center><h3 id="uvw">0</h3></center></td>
							<td> <center><h3 id="nvw">0</h3></center></td>
						</tr>


					</table>
					<div id="curve_chart" style="width: 100%; height:300px;"></div>
			</div>	
						
		
				
	</div>
	<br>

	<div class="flex-container">
		<div class="devices" >
			<h5>WHICH FROM VISITORS COME FROM ?</h5><br>
			 <div id="devices" style="width:100%; height:250px;"></div>
		</div>
		<div>
			<div class="os">
				<em><b>Operating System</b></em>
			<h6>Window <span style="float:right;"><b id="ww">0</b></span></h6>
			<h6>Android<span style="float:right;"><b id="aw">0</b></span></h6>
			<h6>iOS<span style="float:right;"><b id="iw">0</b ></span></h6>
			</div>
			<div class="os">
				<em><b>Browser</b></em>
			<h6>Crome <span style="float:right;"><b id="cw">0</b></span></h6>
			<h6>Firefox<span style="float:right;"><b id="fw">0</b></span></h6>
			<h6>Safari<span style="float:right;"><b id="sw">0</b></span></h6>
			</div>
		</div>
		
				
		</div>
			
		
	
</main>
<script type="text/javascript">
	$(document).ready(function(){
		today();
		last7graph();
		weekdata();
	});

</script>


<script type="text/javascript">
	var f=["Date","UniqueVisitor"]
	var e=[];var graphdata=[];
	graphdata[0]=f;
	var i=0;var j=1;
	var k=0;
	function last7graph(){
		$.ajax({
			url:'admin/Analytics/uniquegraph.php',
			success:function(response){
				
				response = JSON.parse(response);
				// /response = JSON.parse(response["uniqueVisitor"]);
				var len=response.length;

				response.forEach(myFunction);
				console.log(graphdata);

		function myFunction(item, index) {
			i=0;var e=[];
 		 for (var key in item) {

  			 e[i++]=item[key];
  			 
  			

 		 }
 		
 		 graphdata[j++]=e;
 		 
 		 
		}
										
		}});
	}
	function weekdata(){
		$.ajax({
			url:'admin/Analytics/weeklyStatics.php',
			success:function(response){
				var get=JSON.parse(response);
				$("#tvw").text(get.totalview);
				$("#uvw").text(get.uniqueview);
				$("#nvw").text(get.newview);
				$("#ww").text(get.Window);
				$("#aw").text(get.Android);
				$("#iw").text(get.iOS);
				$("#cw").text(get.Chrome);
				$("#fw").text(get.Firefox);
				$("#sw").text(get.Safari);
				
				var m=get.Mobile;
				var d=get.Desktop;
				var t=get.Tablet;
				//devices
	      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['device', 'Visitors'],
          ['Desktop', d],
          ['Tablet', t],
          ['Mobile', m]
        ]);

        var options = {
          
          bars: 'horizontal',
          vAxis: {format: 'decimal'},
          height: 150,
          colors: ['#1b9e77'],
          chartArea:{width:"90%",height:"97%"}
        };

        var chart = new google.charts.Bar(document.getElementById('devices'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        
      }

				console.log(get);
			}
		});
	}

	google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(graphdata);

        var options = {
          
          curveType: 'function',
          legend: { position: 'bottom' },
          chartArea:{width:"90%",height:"70%"}
        
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      
</script>
<script type="text/javascript">
	// today
	function today(){
		$.ajax({
			url:'admin/Analytics/todayStatics.php',
			success:function(response){
				var response=JSON.parse(response);
				
				console.log(response);
				var tv=response.totalvisitor;
				var uv=response.uniqueVisitor;
				var nv=response.newvisitor;
				$("#tvv").html(tv);
				$("#uvv").text(uv);
				$("#nvv").text(nv);
		    	google.charts.load("current", {packages:["corechart"]});
	      		google.charts.setOnLoadCallback(drawChart);
	      		function drawChart() {
	       	 		var data = google.visualization.arrayToDataTable([
	         		 ['', 'Visitors'],
	         		 ['Total Visitors', tv],
	          		['Unique visitors', uv],
	          		['New Visitors',  nv]
	          
	        	]);

	        	var options = {
	         	chartArea:{width:"100%",height:"100%"},
	          
	          	pieHole:0.4,
	       		 };

	        	var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
	        	chart.draw(data, options);
			}}
		});
	}

       
   

</script>
<script type="text/javascript">
	
</script>
<?php } ?>
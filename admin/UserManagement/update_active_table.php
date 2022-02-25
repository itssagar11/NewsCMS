<?php
	require('../includes/config.php');
	$time= time();
	$query1= "SELECT * FROM admin";
	$result= mysqli_query($conn,$query1);
	$html='';
	if(mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			$status="btn-danger";
			$msg="Offline";
			if($row['last_login']>$time-5){
				$status="btn-success";
				$msg="Online";
			}
			$html.="<table class='table table-striped' id='activeUser'><tr>
						<td> <img src='".$row['ProfilePhoto']."'width='30' height='30' style='border-radius:50%;''></td>
						<td>".$row['Username']."</td>
						<td class='device_hide'>".$row['Name']."</td>
						
						<td class='device_hide'>".$row["Email"]."</td>
						
						<td><span class='".$status." btn-xs btn'>".$msg."</span></td>
						
					   
					</tr>  ";
		}
		echo $html;
	}				
?>
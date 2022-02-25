<?php
	require('../includes/config.php');
	//require_once('../includes/header.php');
	session_start();
	 $user= $_SESSION['login_user'];
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
			$html.="<tr>
						<td>".$row['admin_Id']."</td>
						<td>".$row['Username']."</td>
						<td>".$row['Name']."</td>
						<td >".$row['PhoneNo']."</td>
						<td>".$row["Email"]."</td>
						<td>".$row['Role']."</td>
						<td><button class='".$status." btn-sm btn'>".$msg."</button></td>
						<td> <?php if({$user['SetUserPermission']}==1){ ?><a style='color:green;'  href='admin/UserManagement/permission.php?id=".$row['admin_Id']." class='btn btn-xs btn-warning'><span class='glyphicon glyphicon-edit'></span></a><?php } ?>"."
						 <?php if({$user['DeleteUser']}==1){ ?>";
						 if($user['admin_Id']!=46){
						     
						
							$html.= "<a  style='color:red; background-color:#ffffff; border:none;'class='btn btn-xs btn-danger' href='admin/UserManagement/delete.php?delete=".$row["admin_Id"]."'	 ><span class='glyphicon glyphicon-trash'></span></a>";
						 }else{
						     	$html.= "<span class='glyphicon glyphicon-trash'></span>";
						 }
						 	$html.=  "	<?php } ?>
						 	</td>
					   
					</tr>  ";
		}
		echo $html;
	}				
?>
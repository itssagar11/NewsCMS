	<?php
	 require("../includes/config.php") ;
	 require("../includes/header.php") ;
	 if (isset($_POST['page_no'])) {
		    $page_no = $_POST['page_no'];
		}else{
		    $page_no = 1;
		}
	$limit = 10;
		$offset = ($page_no-1) * $limit;

		$query = "SELECT * FROM article ORDER BY id DESC LIMIT $offset, $limit  ";
		$total=mysqli_query($conn,"SELECT id from article ");
		$result = mysqli_query($conn,$query);
		$total=mysqli_num_rows($total);
		$output = ' <br><br>
	                        <label class="label label-success">Published &nbsp '.$total.'</label><br><br>
	                        <table class="table table-responsive table-hover table-striped " id="myTable">';


		


		if ($total > 0) {
		$output.='<tr><th>Title</th><th>Author</th> <th id="category">Categories</th><th id="time">Date</th>
		</tr>';
		while ($row = mysqli_fetch_assoc($result)) {

		$output.='<tr>
	                <td><b>
	               '.$row["title"].'</b>
	                 <br>
	                 <?php if($user["EditArticle"]==1){ ?>
	                   <small>
	                   <a href="admin/Article/editArticle.php?id='.$row["id"].'">Edit </a>
	                   </small>|
	                   <?php } ?>
	                  <small >';
	   
	              		 if($user["DeleteArticle"]==1 && $user["admin_Id"]!=46){ 
	   $output.='<a href="admin/Article/articleDelete.php?delete='.$row["id"].'&category='.$row["category"].'&slug='.$row["slug"].'" style="color:red;">Trash </a>
	                  </small>|';
	                 }
	                  $output.='   <a href="'.$row["category"].'/'.$row["slug"].'" style="color:green;">View </a>
	                  </small>
	                  
	                  </td>
	                  <td>
	                  '.$row["author"].'
	                  </td>
	                  <td id="category">
	                  '.$row["category"].'
	                  </td>
	                  <td id="time"> <em>last modified<em><br>
	                  '.$row["Updatetime"].'
	                  </td>
	                  </tr>';
		} 
		$output.=" </table>";


		$totalRecords = $total;

		$totalPage = ceil($totalRecords/$limit);

		$output.="<center><ul class='pagination pagination-sm ' style='margin:20px 0'>";

		for ($i=1; $i <= $totalPage ; $i++) { 
		   if ($i == $page_no) {
			$active = "active";
		   }else{
			$active = "";
		   }

		    $output.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
		}

		$output .= "</ul>";

		echo $output;

		}

	?>
	 
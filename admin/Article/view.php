<?php
 require("../includes/header.php"); 
 require("../includes/config.php") ;?>
 <?php
 if($user['AddNewArticle']==1){
 ?>
    <style type="text/css">
    	.articleContainer{
    		display:inline;
    		
    		width: 90%;
    		margin-top: 8px;
    	}
    	
    	.btn-outline{
    		border:1px solid #0160A1;
    	}
    	.table{
    		background-color: #ffffff;
            width:95%;
            font-size:14px;
            color:#135EA3;
             border:none;
             padding:0px;
    	}

    	
        #search{
            width: 50%;
        }
    	
        @media screen and (max-width: 769px){
            .articleContainer{
                grid-template-columns: repeat(1,auto); 
            }
            .table{
              width:99%;
            }
             #search{
            }
            width: 100%;
        }
        #time,#category{
            display:none;
        }
        }
    </style>
    <main>
        <ul class="breadcrumb">
  <li><a href="admin/deshboard.php">Home</a></li>
  <li><a href="admin/Article/view.php">Article</a></li>
  
 </ul>
    	<h3>ARTICLES <?php
 if($user['AddNewArticle']==1){
 ?><small>&nbsp &nbsp<a href="admin/Article/addnew.php" class="btn btn-warning  btn-xs"><span class="glyphicon glyphicon-plus"></span>Add News Article</a></small><?php } ?></h3>
    	<div class="articleContainer">
    		<div class="articleContainer-item">
    		<input type="text" id="search" placeholder="Search.." class="form-control">
                   
    		
    			  
                    <div id="data-fetch">
                        <br><br>
                        <label class="label label-primary">Published</label><br><br>
                        <table class="table table-responsive">
                            <tr>
                                <td>
                                    title
                                    <br>
                                    <small>Date:-</small>
                                    <div style="float:right;">
                                        <small>
                                            <a href="">Edit </a>
                                        </small>|
                                          <small>
                                            <a href="">Trash </a>
                                        </small>|
                                          <small>
                                            <a href="">View </a>
                                        </small>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                  
    		
    	</div>	
    <?php }?>
    </main>
    <script type="text/javascript">
          function loadData(page){
      $.ajax({
        url  : "admin/Article/update_news_table.php",
        type : "POST",
        cache: false,
        data : {page_no:page},
        success:function(response){
          $("#data-fetch").html(response);
         
        }
      });
    }
    	
$(document).ready(function(){
   loadData();
    // pagination //
      $(document).on("click", ".pagination li a", function(e){
      e.preventDefault();
      var pageId = $(this).attr("id");
      loadData(pageId);
    });
      //search
     $("#search").on("keyup", function() {
       var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
      });
    </script>
<?php 
require("../includes/header.php"); 
require("../includes/config.php") ; 
include("../includes/PageGenerate.php"); 
if($user['EditArticle']==1){

$id=$_GET['id'];
$SQLquery="SELECT * from article where id='$id'";
$getData= mysqli_query($conn,$SQLquery)  ;
if(!$getData= mysqli_fetch_ASSOC($getData)) echo "error";
?>
<script src="admin/includes/ckeditor/ckeditor.js"></script>
<script src="admin/includes/ckfinder/ckfinder.js"></script>

<style type="text/css">

  .breadcrumb-menu{
    width:100%;
    background-color: #ffffff;
    border-bottom:1px solid #E0E0E0;
    position:sticky;
    padding:10px;
    height:55px;
    margin:0px;
  }
  .flex-container{
    display:flex;
    margin-top:10px;
    flex-wrap:nowrap;
  }
  .article{
    width:70%;
    height:auto;
    padding:5px;
    border-right:1px solid #E0E0E0;
  }
  .article_title{
      background-color: white;
      width: 100%;
      border:none;
      height: auto;
      overflow: visible;
      padding-top:8px;
      overflow: auto;
    font-size: 40px;
    font-weight:700;
      line-height: 1;
      overflow-x:hidden;
}
.description{
  font-size:14px;
  font-weight:100;
  margin-top:2px;
  height:80px;
}
  	.ck-editor__editable {
    
    		height: 300px;
}
.editor{
  font-size:16px;
  align-content:n;
  height: 100%;
}
  .setting{
    width:30%;
    position:sticky;
    padding: 2px 5px;
    margin-left:2px;
  }
  textarea:focus{
    outline:none;
  }
  .featuredimageURL{
        display:none;
      }
    input:focus{
        outline:none;
        
      }
  .featuredImg{
        margin:15px 1px 15px 1px;
        width:95%;
        height:30px;
        padding:2px 2px;
        border:none;
        border-bottom:1px solid #878787;
       
      }
      .set{
        display:none;
      }
      .form-control{
        border-radius:0px;
        border:1px solid #000000;
      }
      .item{
        padding:8px 1px;
      }
      
  @media screen and (max-width:763px){
    .article{
      width:100%;
      border-right:none;
    }
    	.ck-editor__editable {
    
    		height: 100%;
}
    .at{
      font-size:30px;
    }
    .setting{
    display:none;
    width:100%;
    }
    .set{
        display:inline-block;
      }
      #published{
        display:none;
      }
  }
</style>
<main>
  <div class="container-fluid" style="background-color: #ffffff;height:100%; overflow:scroll">
     <div class="breadcrumb-menu">
     <button class="
glyphicon glyphicon-sort-by-attributes set"style="float:right; color:#ffffff; background-color: #000000; margin:4px; padding:8px;" id="setting"></button  >
     <button class="btn btn-success btn-md " id="save" style="float:right; margin:4px;">Save Changes</button>

     </div>
      <div id="alert"></div>

     <div class="flex-container">
      <div class="article">
        <textarea class="article_title at" placeholder="Add Title" id="title"><?php echo $getData['title'];?></textarea>
        <textarea class="article_title description" placeholder="Enter Meta Description within 255 words" id="MetaDescription" rows="50"><?php echo $getData['description'];?></textarea>
         <textarea name="editor" class="editor"id="editor" placeholder="Focus on the part of your story that is likely to be of most interest to your readers. Stories become news because of their importance, emotion, impact, timeliness and interest to the reader. 
"><?php echo $getData['content'];?></textarea>
            

      </div>
      <div class="setting">
        <div class="item">
          <form id="myImage">
            <small style="color:#135EA3">Featured Image</small>
            <img src="http://sagarbisht.com/<?php echo $getData['featuredImage'];?>" width="100%" height="220px" id="showImg">
            <input type="file" id="image" name="myimage">
            <input type="text" class="featuredimageURL featuredImg" style="background-color:#ffffff; border:none;" value="<?php echo $getData['featuredImage'];?>" id="featuredimage" disabled >
            <small id="msg"></small>
            <input type="submit" name="" value="upload to server"  class="btn btn-danger btn-xs " id="submit">
          </form>
        </div>
        <div class="item">
          <small style="color:#135EA3">Keywords</small>
          <input type="text" value="<?php echo $getData['keyword'];?>" class="form-control" id="keyword" >
        </div>
        <div class="item">
          <small style="color:#135EA3">Select Category</small>
          <select class="form-control" id="Category" required>
            <option value="<?php echo $getData["category"]; ?>"><?php echo $getData["category"]; ?></option>
                <?php
                $categoryQuery="SELECT * FROM category"; 
               $result= mysqli_query($conn,$categoryQuery);

                if(mysqli_num_rows($result)>0){
                 
                 while($row= mysqli_fetch_assoc($result)){
              ?>
            <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
              <?php  } } ?>
          </select>
        </div>
        <div class="item">
        <small style="color:#135EA3">Author</small>
        <input type="text" id="author"  readonly class="form-control"  value="<?php echo $getData['author'];?>">
        </div>
        <div class="item">
        <small style="color:#135EA3">Date</small>
        <input type="text" name="articledate" readonly id="date"class="form-control" value="">
        </div>
        <div class="item">
        <small style="color:#135EA3">Location</small>
        <input type="location" id="location"  class="form-control" value="<?php echo $getData['location'];?>">
        </div>



      </div>
     </div>
  <div>
</main>

<script type="text/javascript">
  //ckeditor integration
  ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
      uploadUrl: 'admin/includes/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
    },      

            } )
            .then( newEditor => {
        editor = newEditor;
    } )
            .catch( error => {
                console.error( error );
            } );
   var id= <?php echo $id ;?>;
   
   var d = new Date();
        var n=d.getDate();
         n+="-"+d.getMonth();
         n+="-"+d.getFullYear();
document.getElementById("date").value = n;  
  $(document).ready(function(){

    if($(window).width() >= 763) {
            $("#setting").click(function(){
      $(".setting").slideToggle(50);
      });

        } else if($(window).width()<= 763){
            $("#setting").click(function(){
      $(".setting").slideToggle(50);
      $(".article").slideToggle(50);
      $("#published").toggle();

      });
        }
    $("#myImage").on("submit",function(e){
        e.preventDefault();
        
        	var admin_id=<?php echo $user['admin_Id']; ?>;
    	    if(admin_id==46){
    	         $("#msg").html("<span style='color:red'>Permission denied.You are login using demo account</span><br>");
    		    
    		    return;
    		}
        
        $.ajax({
          url:"admin/includes/featuredImg_upload.php",
          type:"POST",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success:function(response){
            if(response==0){
              $("#msg").html("<span style='color:red'>Please select file</span><br>");
            }else if(response==1){
                        $("#msg").html("<span style='color:green'>Only jpeg,jpg,png,gif file allowed. </span><br>");
            }else{
              $("#submit").hide();
              $("#image").hide();
              $("#featuredimage").show();
              $("#featuredimage").val(response);
              $("#msg").hide();
              $("#showImg").attr("src",response);

            }
          }
        });
      });
      $("#save").click(function(){
          	var admin_id=<?php echo $user['admin_Id']; ?>;
    	    if(admin_id==46){
    		    	$("#alert").html("<div class='alert ' id='alert'><h4 style='color:#C63100;'>Permission denied</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>You are login using demo account.</div></div></div>");
    		    return;
    		}
       
        var title= $("#title").val();
        var description=$("#MetaDescription").val();
        const content= editor.getData();
        var featuredimage=$("#featuredimage").val();
        var keyword=$("#keyword").val();
        var  category=$("#Category").val();
        var author=$("#author").val();
        var date=$("#date").val();
        var location=$("#location").val();
        console.log(content);
        $.ajax({
          url:'admin/Article/editnews.php',
          type:'POST',
          data:{id:id,title:title,description:description,editor:content,featuredimage:featuredimage,keyword:keyword,category:category,author:author,date:date,location:location,},
          success:function(response){
            if(response==-1){
              $("#alert").html("<div class='alert ' id='alert'><h4 style='color:#C63100;'>Failed</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>Article with same title alredy exists.</div></div></div>");
              console.log(response);

            }else if(response==0){
                $("#alert").html("<div class='alert ' id='alert'><h4 style='color:#C63100;'>Failed</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'>Please Enter all credential.</div></div></div>");
              console.log(response);
            }else if(response==1){
                $("#alert").html("<div class='alert ' id='alert'><h4 style='color:#319400;'>Success</h4><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <div class='content'> Article Update. Readirecting You...</div></div></div>");
                setInterval(function(){
                  window.location="admin/Article/view.php";
                },1100)
              console.log(response);
            }
          }
        });

      });
    
  });
</script>
</body>
<?php } ?>
</html>

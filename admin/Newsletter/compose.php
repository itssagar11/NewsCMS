<?php
require("../includes/config.php");
require("../includes/header.php");
if($user['compose']!=1){
		echo "Permission denied";
}else{
	$to=$_GET['email'];
    $name=$_GET['name'];  
	
	
?>
<script src="admin/includes/ckeditor/ckeditor.js"></script>
<script src="admin/includes/ckfinder/ckfinder.js"></script>
<style type="text/css">
	.in-container{
		width:100%;
        background-color: #ffffff;
        padding:10px;
	}
        .ck-editor__editable {
    
            height: 300px;
}
</style>
<main>
	 <ul class="breadcrumb">
  <li><a href="admin/deshboard.php">Home</a></li>
  <li><a href="admin/Newsletter/view.php">Newsletter</a></li>
  <li><a href="admin/Newsletter/email.php">Compose</a></li>
  
 </ul>
	<div class="container-fluid">
		<h2>Send Mail </h2>
		<div class="in-container">
              <label>Recipient Name</label>
         <input type="text"class="form-control" id="name" placeholder="Name" value="<?php echo $name;?>" disabled> <br> 
            <label>Recipient Email</label>
         <input type="text"class="form-control" id="to" placeholder="Recipients" value="<?php echo $to;?>" disabled> <br>      
          <label>Subject</label>
        <input type="text"class="form-control" id="subject" placeholder="Subject " required ><br>
        <textarea id="editor"></textarea>
        <br>
        <center>
            <button type="button" id="btn_send" class="btn btn-primary btn-sm"><span class="fa fa-send"></span> Send</button>
<br>            <span id="msg" style="color:#red;"></span>
        </center>
		</div>
	</div>
</main>
<script type="text/javascript">
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

    $("#btn_send").click(function(){
        $("#msg").text("Please wait...");
        var name=$("#name").val();
        var to=$("#to").val();
        var subject=$("#subject").val();
        var body=editor.getData();
        $.ajax({
            url:'admin/Newsletter/send.php',
            type:"post",
            data:{ body:body,subject:subject,to:to,name:name},
                success:function(re){
                    console.log(re);
                   if(re=="Message has been sent0"){
                        $("#msg").html('<span id="msg" style="color:#green;">  Mail Sended! Redirecting You in a sec..</span>');
                        setInterval(function(){ 
                            window.location="admin/Newsletter/view.php";
                        },1500)
                   }else if(re==-1){
                    $("#msg").text("Please enter full details");
                }else{
                    $("#msg").text("Something wrong! mail not send");
                }
                }
        });
    });

</script>


<?php } ?>
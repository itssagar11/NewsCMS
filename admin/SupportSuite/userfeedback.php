<?php
require_once("../includes/header.php");

?>
<script src="admin/includes/ckeditor/ckeditor.js"></script>
<script src="admin/includes/ckfinder/ckfinder.js"></script>
<style>
	.container{
		display:flex;
		flex-wrap:wrap;
		
	}
	.item{
		width:47%;
		background-color: #ffffff;
		padding:20px 10px;	}
		
		.ck-editor__editable {
    
    		height: 300px;
}
	@media only screen and (max-width:769px){
		.item{
			width:100%;
		}
		
	}
</style>

<main>
	<h2>Support Suit</h2>
	<div class="container">
		<div class="item">
			<h4>Most asked Question</h4><hr>
			<h4>What if i there is some error in software?</h4>
			<p style="color:blue;	">Please wirte us. We will fix it ( no additional charges ).</p>
			<h4>What if i want some more feature in my software?</h4>
			<p style="color:blue;	">You can contact us. We will add that feature in your software if possible (extra charge).</p>
			<h4>What if i want some more feature in my software?</h4>
			<p style="color:blue;	">You can contact us. We will add that feature in your software if possible (extra charge).</p>
			<h4>What if i want some more feature in my software?</h4>
			<p style="color:blue;	">You can contact us. We will add that feature in your software if possible (extra charge).</p>
			<h4>What if i want some more feature in my software?</h4>
			<p style="color:blue;	">You can contact us. We will add that feature in your software if possible (extra charge).</p>
			<h4>What if i want some more feature in my software?</h4>
			<p style="color:blue;	">You can contact us. We will add that feature in your software if possible (extra charge).</p>
		</div>

		<div class="item">
			<h4>Send us your Query</h4><hr>
			<label>Subject</label>
		<input type="text"class="form-control" id="subject" placeholder="Subject "><br>
		<label>Enter in detail</label>
		<textarea id="editor" placeholder="Write a clear description.
A good description should quickly and uniquely identify a issue report. It should explain the problem, not your suggested solution."></textarea>
<br><center>
		<button type="button" class="btn btn-danger btn-sm" id="btn_send">
			Send Feedback
		</button><br>
		<span id="msg"></span>
	</center>
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
	</script>
	</div>
	</div>
</main>
<script>
	


   $("#btn_send").click(function(){
   			$("#msg").text("Please wait...");
    	var subject=$("#subject").val();
    	var body=editor.getData();
    	$.ajax({
    		url:'admin/SupportSuite/sendfeedback.php',
    		type:"post",
    		data:{ body:body,subject:subject},
   				success:function(re){
   					$("#subject").val("");

   							$("#msg").text("Your request has been send. We will get in touch with you within 24hrs. Thanks!");
   				}
    	});
    });

  
</script>
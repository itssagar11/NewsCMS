 <script type="text/javascript">
          function updateLoginStatus(){
      $.ajax({
              url:'update_login_status.php',
              success:function(){

              }
              
             });
           
        }
         setInterval(function(){
              updateLoginStatus();  
         },5000);
        </script>
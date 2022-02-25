<?php
require('admin/includes/config.php');
$category=$_GET['category'];
$quey=mysqli_query($conn,"SELECT * FROM category where name!='$category'");
 ?>
<!DOCTYPE html>
<html amp lang="en">
  <head>
    <meta charset="utf-8" />
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script
      async
      custom-element="amp-list"
      src="https://cdn.ampproject.org/v0/amp-list-0.1.js"
    ></script>
    <script
      async
      custom-template="amp-mustache"
      src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"
    ></script>
   
   
    <script
      async
      custom-element="amp-font"
      src="https://cdn.ampproject.org/v0/amp-font-0.1.js"
    ></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
   
    <title>Sagar-Project Under Development</title>
    <link rel="canonical" href="https://article-newsportal.glitch.me/" />
    <meta data-rh="true" name="theme-color" content="#000000" />
   
    <link rel="amphtml" href="https://article-newsportal.glitch.me" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@362&display=swap"
      rel="stylesheet"
    />
   
    <meta
      name="viewport"
      content="width=device-width,minimum-scale=1,initial-scale=1"
    />
    <style amp-boilerplate>
      body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      }
      @-webkit-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-moz-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-ms-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-o-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
    </style>
    <noscript
      ><style amp-boilerplate>
        body {
          -webkit-animation: none;
          -moz-animation: none;
          -ms-animation: none;
          animation: none;
        }
      </style></noscript
    >
    <style amp-custom>
      body {
        font-family: "Rubik", sans-serif;
        line-height: 1.5rem;
        padding: 2px;
      }
      header {
        background-color: #ffffff;

        position: sticky;
        top: 0;
        margin: 0 0px;
        height: 50;
        width: 100%;
        margin-right: 0px;
        z-index: 999;
      }

      .logo {
        width: 100%;
        height: 50;
        margin: 10px;
      }
      
      main {
       
        width:99%;
        
      }
      .inline{
        
        width: 400px;
        display: inline-block;
        float: right;
        margin: auto;
        padding: 4px;
        position: sticky;
      }
      .center{
      margin:1px 80px;
      display: inline-block;
        padding:10px;
        width:600px;
        

      }
      .top-four{
        display: flex;
        flex-wrap: nowrap;
        border-bottom: 1px solid #f7f7f7;
        padding: 5px;
        margin-right: 12px;
      }

      .news{
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        margin-bottom: 5px;
        width:700px;
      }
      .title{
        width:560px;
      }

      a{
          text-decoration: none;
          color:#000000;
      }
      
      h2,
      h4,
      h5,
      p {
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
      }
       .menu {
          margin-right: 1px;
          padding:8px 2px;
          background-color: #FAFAFA;

          -webkit-overflow-scrolling: touch;
          overflow-y: hidden;
          overflow-x:auto;
          max-height: 18px;
          width: 100%;
        }

        .menu-topic {
          color:#668EAD;
          
          font-size: 15px;
          margin:1px  5px;
          width: auto;
          height:22px;
          
        }
     
      @media only screen and (max-width: 768px) {
        .menu {
        overflow-y: 
        }
        .center{
          width:100%;
          margin: 1px 1px;
        }

      .inline{
      
        width:100%;

      }
      .news{
        width: 100%;
      }
      .title{
        width:60%;
      }
      
    </style>
  </head>
  <body>
    <amp-font
      layout="nodisplay"
      font-family="My Font"
      timeout="3000"
      on-error-remove-class="my-font-loading"
      on-error-add-class="my-font-missing"
    ></amp-font>
    <amp-font
      layout="nodisplay"
      font-family="My Other Font"
      timeout="1000"
      on-load-add-class="my-other-font-loaded"
      on-load-remove-class="my-other-font-loading"
    ></amp-font>
    <header>
        
      
      <div class=" content-width">
          <div class="logo">
          
          <amp-list width="190" height="60" layout="fixed" src="//article.sagarbisht.com/JSON/SEO/seo.json">
          <template type="amp-mustache">
          <a href="{{siteURL}}">
            <amp-img
              src="{{logo}}"
              layout="fixed"
              width="180"
              height="50"
              alt="{{siteTitle}}"
            ></amp-img>
          </a>
          </template>
          </amp-list>
        </div>
          
      </div>
      


    </header>
    <amp-carousel class="menu" height="50" layout="fixed-height" type="carousel" role="region" aria-label="Basic usage carousel">
 <?php 
  while($resul=mysqli_fetch_assoc($quey)){ ?>
  <a href="category.php?category=<?php echo $resul['name'] ?>" class=" menu-topic" style="color: #b7b7b7;"> <i> <?php echo $resul['name'] ?></i></a>
  <?php } ?>

</amp-carousel>
    <br>
      <main>
         <div class="center">
            <?php $query=mysqli_query($conn,"SELECT * FROM article where category='$category'");

             while($result=mysqli_fetch_assoc($query)){ ?>
              <a href="<?php echo $result['url']?>">
            <div class="news" style="margin-bottom:25px;">
                  <div class="title">
                    
                      <h4
                        style="margin-top:1px; margin-bottom:1px; font-size:22px;"
                      >
                      <?php echo $result['title']?>
                      </h4>
                      <p style="margin:1px; font-size:16px;">
                       <?php echo $result['description']?>
                      </p>
                      <small style="color:"><?php echo $result['Updatetime']?></small>
                  </div>
                  <div style="width: 120px;">
                    <amp-img
                      src="<?php echo $result['featuredImage']?>"
                      layout="fixed"
                      width="120"
                      height="120"
                    >
                    </amp-img>
                  </div>
            </div>
          </a>
          <hr>
          <?php } ?>
        </div>
        <div class="inline ">
        <!-- Advertizement  -->
        <div>
        </div>
        <!-- --- -- -->
            <h5>More to Read</h5>
            <?php 
            $sql=mysqli_query($conn,"SELECT * FROM article where category!='$category' ORDER BY id DESC");
            if(mysqli_num_rows($sql)==0){
              echo "Currently, There is no article";
            }
            while($fetch=mysqli_fetch_assoc($sql)){
            ?>
             <div class="top-four">
                  <div>
                    <small class="category" style="color:#E7287B;" 
                      >#<i><?php echo $fetch['category'] ?></i></small
                    >&nbsp&nbsp&nbsp
                    <small><?php echo $fetch['Updatetime'] ?></small>
                    <h4
                      style="margin-top:1px; margin-bottom:1px; font-size:16px;"
                    >
                      <?php echo $fetch['title'] ?>
                    </h4>
                    <a href="<?php echo $fetch['url'] ?>" style="color:#04A77A; margin-top:1px;"
                      >read more</a
                    >
                  </div>
                  <div>
                    <amp-img
                      src="<?php echo $fetch['featuredImage'] ?>"
                      layout="fixed"
                      width="100"
                      height="100"
                    >
                    </amp-img>
                  </div>
                </div>
               
            <?php } ?>

        </div>
      </main>
      
  </body>
</html>

<?php
include("admin/includes/config.php");
if(!isset($_COOKIE["lastyear"])){
    mysqli_query($conn,"update uniquevisitors set inYear=inYear+1");
  setCookie("lastyear","yes",time() + (86400 * 30), "/");
  
}

 ?>
    <!DOCTYPE html>
<html ⚡>
  <head>
  <script data-ad-client="ca-pub-1762831108546462" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8" />
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script
      async
      custom-element="amp-ad"
      src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"
    ></script>
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
      custom-element="amp-carousel"
      src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"
    ></script>
    <script
      async
      custom-element="amp-font"
      src="https://cdn.ampproject.org/v0/amp-font-0.1.js"
    ></script>
    <script
      async
      custom-element="amp-sticky-ad"
      src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"
    ></script>
    <script
      async
      custom-element="amp-form"
      src="https://cdn.ampproject.org/v0/amp-form-0.1.js"
    ></script>
    
</script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <title>SAGAR-TECH BLOGS</title>
    <link rel="canonical" href="https://sagarbisht.com/" />
    <meta data-rh="true" name="theme-color" content="#000000" />
    <meta data-rh="true" name="twitter:app:name:iphone" content="SAGAR" />
    <meta
      data-rh="true"
      name="SAGAR"
      content="SAGAR-TECH BLOGS"
    />
    <meta
      data-rh="true"
      name="description"
      content="Reads article related Technology, Cyber Security , Programming.."
    />
    <meta data-rh="true" name="twitter:card" content="summary_large_image" />
    <meta data-rh="true" name="twitter:creator" content="@SAGAR" />
    <meta
      data-rh="true"
      name="twitter:description"
      content="Reads article related Technology, Cyber Security , Programming."
    />
    <meta
      data-rh="true"
      name="twitter:image:src"
      content="admin/images/1393441182.png"
    />
    <meta data-rh="true" name="twitter:site" content="@SAGAR" />
    <meta
      data-rh="true"
      name="twitter:title"
      content="SAGAR-TECH BLOGS"
    />
    <meta
      data-rh="true"
      property="og:description"
      content="Reads article related Technology, Cyber Security , Programming."
    />
    <meta
      data-rh="true"
      property="og:image"
      content="admin/images/1393441182.png"
    />
    <meta data-rh="true" property="og:site_name" content="SAGAR" />
    <meta
      data-rh="true"
      property="og:title"
      content="SAGAR-TECH BLOGS"
    />
    <meta data-rh="true" property="og:type" content="website" />
    <meta data-rh="true" property="og:url" content="https://sagarbisht.com/" />
    <meta data-rh="true" name="parsely-link" content="https://sagarbisht.com/" />
    <link
      data-rh="true"
      rel="search"
      type="application/opensearchdescription+xml"
      title="SAGARTECH BLOGS"
      href="/osd.xml"
    />
        <meta
      data-rh="true"
      property="description"
      content="Reads article related Technology, Cyber Security , Programming."
    />

  <meta name="keywords" content="Sagar Bisht , Sagar Bisht blogs">
    <link
      data-rh="true"
      rel="apple-touch-icon"
     
      href="admin/images/1393441182.png"
    />
   
    <link
      data-rh="true"
      rel="icon"
      href="admin/images/1393441182.png"
    />
    <link rel="amphtml" href=" https://sagarbisht.com/ "> 
    <script data-rh="true" type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "url": "https://sagarbisht.com/",
        "name": "Medium",
        "description": "Reads article related Technology, Cyber Security , Programming.",
        "publishingPrinciples": "https:https://sagarbisht.com//terms.html",
        "logo": {
          "@type": "ImageObject",
          "width":484,
          "url":" admin/images/1663110485.png ",
          "height": 168
        }
      }
    </script>
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
      </style></noscript>
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
      .content-width{
        display: flex;
        justify-content: space-between;
        
        margin: 0 auto;
        height:60px;

      }

      .logo {
        width: 100%;
        height: 50px;;
        margin: 0px 10px;

      }
      .menu {
        padding: 5px;
      }
      li > a {
        color: #000000;
        font-size: 1.1em;
        text-decoration: none;
        margin-right: 8px;
      }
      .amp-carousel-button-prev {
        display: none;
      }
      .amp-carousel-button-next {
        display: none;
      }
      main {
        margin-left: 50px;
        margin-right: 50px;
      }
      
      #sidebar-menu-btn {
        background: 0 0;
        border: 0;

        font-weight: 700;
        font-size: 28px;
      }
       .amp-custom-sidebar-header {
        line-height: 3.5rem;
        min-height: 3.5rem;
        color: #fff;
      }
       #sidebar-close {
        cursor: pointer;
         color:#000000;
         float:left;
         margin-left:15px;
         
      }
      button:hover{
        border:none;
      }
      
      .li-category{
        list-style-type:square;
        margin:  3px 5px 0px 13px;
        color:#d3d1d1;
        border-bottom:1px solid #e6e6e6;
        padding:5px;
        align-content: center;
        display:block;
        font-weight: 100;
      }
      .li-category>a{
        color:#000000;
        font-weight: 100;
      }
      .branding{
        margin:5px;
        
      }
      .top {
        border-bottom: 1px solid #E6E6E6;
        padding: 1%;
        margin-top: 1px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .left {
        width: 365px;
        padding: 8px;
      }
      .center {
        width: 365px;
        padding: 5px;
      }
      .right {
        width: 365px;
        border-left: 1px solid #E6E6E6;
        padding: 5px;
      }
      
      .category {
        font-style: italic;
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
 .description {
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
      }
      .read-more {
        background-color: #04A77A;
        color: #ffffff;
        border-radius: 26px;
        padding: 8px;
      }
      .top-four {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        margin-bottom: 5px;
      }

      .topic-to-read {
        margin-right: 1px;
        height: 225px;

        -webkit-overflow-scrolling: touch;
        overflow-x: auto;
      }

      .container {
        border-bottom: 1px solid #E6E6E6;
        padding: 1%;
        margin-top: 1px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        
      }
      .news {
        width: 740px;
        display: inline-block;
      }

      .side-footer {
        width: 365px;
        height:500px;
        position: sticky;
        padding: 10px;
      }
      .footer-menu {
        text-decoration: none;
        margin-right: 10px;
      }
      .menu-topic {
       list-style-type:square;
        margin:  5px 2px 0px 13px;;
        color:706c6c;
        border:1px solid #e6e6e6;
        padding:2px 5px;;
        font-size:12px;
        display:inline-block;
        font-weight: lighter;
      }
      input{
        border:none;
        border-bottom:1px solid #efefef;
        padding:5px;
        margin:10px;
        width:300px;
      }
      input[type=submit]{
        color:white;
        font-size:1.2em;
        background-color:#000000;
        width:60%;
      }
        .more-news-title>a{
        text-decoration:none;
        color:#000000;
      }


      @media only screen and (max-width: 725px) {
        main {
          margin-left: 5px;
          margin-right: 5px;
        }
        .left {
          width: 100%;
        }
        .center {
          width: 100%;
          border-top: 1px solid #E6E6E6;
          margin-top: 10px;
        }
        .right {
          width: 100%;
          border-left: none;
          margin-top: 10px;
        }
        .top-four {
          margin-top: 8px;
          margin-right: 2px;
          padding: 1px;
        }
        .topic-to-read {
          margin-right: 1px;
          height: 225px;

          -webkit-overflow-scrolling: touch;
          overflow-x: auto;
        }
        .news {
          width: 100%;
          border-left: none;
          display: inline;
        }
        .side-footer {
          width: 100%;
          border-left: none;
        }
        footer {
          padding: 15px;
          box-sizing: border-box;
          margin-top: 5px;

          width: 100%;
          height:auto;
        }
        .menu-topic {
          
          font-size: 15px;
        }
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
          
          <amp-list width="190" height="60" layout="fixed" src="//sagarbisht.com/JSON/SEO/seo.json">
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
        <button id="sidebar-menu-btn" style="margin-right:5px; " on="tap:sidebar.toggle">☰</button>
      </div>
    </header>
    <!--Sidebar-->
     <amp-sidebar id="sidebar" layout="nodisplay" style="width:250px" side="right">
      <div class="amp-custom-sidebar-header">
        <div
          role="button"
          aria-label="close sidebar"
          on="tap:sidebar.toggle"
          tabindex="0"
          id="sidebar-close"
        >
          ✕
        </div>
      </div>
       <h4>
         Category
       </h4>
       <amp-list width="250" height="400" src="//sagarbisht.com/JSON/categories/categories.json" layout="responsive">
         
         <template type="amp-mustache">
           <li class="li-category"><a href="https://sagarbisht.com/category.php?category={{name}}">{{name}}</a></li>
         </template>
       </amp-list>
     
     
    </amp-sidebar>
    
<!-- Advertizement-->
    <amp-list width="468" height="60" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
      <template type="amp-mustache">
        <div class="ad-container">
           <amp-ad width="100vw" height="320"
                 type="adsense"
                 data-ad-client="{{adclient}}"
                 data-ad-slot="{{horizontaladd}}"
                 data-auto-format="rspv"
                 data-full-width="">
              <div overflow=""></div>
            <div fallback>
                <p style = "color:grey;font-size:25px;">No ads to Serve!</p>
            </div>
            </amp-ad>
        </div> </template
    ></amp-list>
    <main>
      <div class="top">
        <div class="left">
          <div class="highlight">
           <amp-list width="370" height="485"  src="//sagarbisht.com/JSON/News/highlited.json" layout="responsive">
         
         <template type="amp-mustache">
            <amp-img
              src="{{image}}"
              layout="responsive"
              width="365"
              height="281"
            >
            </amp-img>

            <small class="category" style="color:#04A77A;">#{{category}}</small
            >&nbsp&nbsp&nbsp
            <small> 02-08-2021 </small>
            <h2 style="font-size:22px; margin:1px;">
              {{title}}
            </h2>
            <p class="description">
              {{description}}
            </p>
            <a href="{{url}}" class="read-more" style=" text-decoration:none;">
              Read more</a>
            </template>
            </amp-list>
          </div>
        </div>
        <!---top four--->
        <div class="center">
          <amp-list
            width="auto"
            height="500"
            layout="fixed-height"
            src="//sagarbisht.com/JSON/News/top4News.json"
          >
            <template type="amp-mustache">
              <div class="top-four">
                <div>
                  <small class="category" style="color:#E7287B;"
                    >#{{category}}</small
                  >&nbsp&nbsp&nbsp
                  <small>{{date}} </small>
                  <h4
                    style="margin-top:1px; margin-bottom:1px; font-size:16px;"
                  >
                    {{title}}
                  </h4>
                  <a href="{{url}}" style="color:#04A77A; margin-top:1px;"
                    >read more</a
                  >
                </div>
                <div>
                  <amp-img
                    src="{{image}}"
                    layout="fixed"
                    width="100"
                    height="100"
                  >
                  </amp-img>
                </div>
              </div>
              <div overflow></div>
            </template>
          </amp-list>
        </div>
        <div class="right">
          <!----add--->
          <div class="ad-container">
              <amp-list width="468" height="300" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
           <template type="amp-mustache">   
               <amp-ad width="100vw" height="320"
                 type="adsense"
                 data-ad-client="{{adclient}}"
                 data-ad-slot="{{squareadd}}"
                 data-auto-format="rspv"
                 data-full-width="">
              <div overflow=""></div>
                <div fallback>
                   <p style = "color:grey;font-size:25px;">No ads to Serve!</p>
                </div>
            </amp-ad>
              
              </template>
              </amp-list>
          </div>
          <hr />

          <!------ topics---->
          <h5>
            Topic to Read
          </h5>
          <div class="topic-to-read">
            <div>
              <amp-list
                width="300"
                height="200"
                layout="fixed"
                src="//sagarbisht.com/JSON/categories/categories.json"
                binding="refresh"
              >
                <div placeholder>
                  <div class="topic-to-read">
                    loading....
                  </div>
                </div>
                <template type="amp-mustache">
                 <a  style="text-decoration:none;" href="https://sagarbisht.com/category.php?category={{name}}" class=" menu-topic"> <i> {{name}}</i></a>
                </template></amp-list
              >
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!------News articles----->

        <div class="news">
          <amp-list
            width="1000"
            height="1200"
            layout="responsive"
            src="//sagarbisht.com/JSON/News/article.json"
            binding="refresh"
          >
            <template type="amp-mustache">
            <div overflow></div>
            <a  style="color:#000000; text-decoration:none;" href="{{url}}">
              <div class="top-four" style="margin-bottom:25px;">
                <div>
                  <small class="category" style="color:#0A23FB;"
                    >#{{category}}</small
                  >&nbsp&nbsp&nbsp

                  <h4
                    style="margin-top:1px; margin-bottom:1px; font-size:22px;"
                  >
                    {{title}}
                  </h4>
                  <p style="margin:1px; sont-size:16px;">
                    {{description}}
                  </p>
                  <small>{{date}} </small>
                </div>
                <div>
                  <amp-img
                    src="{{image}}"
                    layout="fixed"
                    width="140"
                    height="140"
                  >
                  </amp-img>
                </div>
              </div>
              </a>
            </template>
          </amp-list>
        </div>
        <div class="side-footer">
          <!---Advertizement----->
          <div class="ad-container">
           <amp-list width="468" height="300" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
           <template type="amp-mustache">  
           
            <amp-ad width="100vw" height="320"
                 type="adsense"
                 data-ad-client="{{adclient}}"
                 data-ad-slot="{{verticaladd}}"
                 data-auto-format="rspv"
                 data-full-width="">
              <div overflow=""></div>
                <div fallback>
                   <p style = "color:grey;font-size:25px;">No ads to Serve!</p>
                </div>
            </amp-ad>
              
              </template>
              </amp-list>
          </div>

          <!-----footer------->

          <div class="subscribe-container">
            <center>
              <h4>
                Subscribe for News Letter
              </h4>
              
              <div class="subscribe-card-container">
                <div class="subscribe-card">
                 <form method = "post" 
         class ="p2" 
         action-xhr ="//sagarbisht.com/subscribe.php" 
         target ="_top">
         
         <div>
            <input type = "text" name = "name" placeholder = "Enter Name" required><br/><br/>
            <input type = "email" name = "email" 
            placeholder = "Enter Email" required>
            <br/>
            <br/>
         </div>
         
         <input type = "submit" value = "Submit">
         
         <div submit-success>
            <template type = "amp-mustache">
               Thanks {{name}} for Susbscribing us!
            </template>
         </div>
         
         <div submit-error>
            <template type = "amp-mustache">
               Oops! {{name}},there is an error please try again.
            </template>
         </div>
      </form>
                </div>
              </div>

            </center>
          </div>
          <br /><br>
        </div>
      </div>

      <!---sticky add--->

   <amp-list
        width="250"
        height="30"
        src="//sagarbisht.com/admin/Advertizement/adsense.json"
        layout="fixed"
      >
        <template type="amp-mustache">
        <amp-sticky-ad layout="nodisplay">
        <amp-ad width="100vw" height="50px"
             type="adsense"
             data-ad-client="{{adclient}}"
             data-ad-slot="{{horizontalstickyadd}}"
             data-auto-format="rspv"
             data-full-width="">
          <div overflow=""></div>
          <div fallback>
               <p style = "color:grey;font-size:25px;">No ads to Serve!</p>
            </div>
    </amp-ad>
     
         </amp-sticky-ad>
        </template>
        </amp-list>
           <?php require("track.php")?> 
      </main>
    </body>
</html>


<!DOCTYPE html>
<?php
include("admin/includes/config.php");
if(!isset($_COOKIE["lastyear"])){
    mysqli_query($conn,"update uniquevisitors set inYear=inYear+1");
  setCookie("lastyear","yes",time() + (86400 * 30), "/");
  
}
 ?>
<html ⚡ lang="en">
  <head>
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
      custom-element="amp-sidebar"
      src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"
    ></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <title>What are defer and async attribute on a script tag</title>
    <link rel="canonical" href="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag" />
    <meta data-rh="true" name="theme-color" content="#000000" />
    <meta data-rh="true" name="twitter:app:name:iphone" content="NewsPortal" />
    <meta data-rh="true" name="twitter:app:id:iphone" content="828256236" />
    
   
 
    <meta data-rh="true" property="fb:app_id" content="542599432471018" />
    <meta data-rh="true" name="robots" content="index,follow" />
    <link rel="amphtml" href="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag" />
    <meta
      data-rh="true"
      name="title"
      content="What are defer and async attribute on a script tag"
    />
    <meta
      data-rh="true"
      name="description"
      content="The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The async attribute is same as defer. It indicate to the browser that the script file can"
    />
    <meta data-rh="true" name="twitter:card" content="summary_large_image" />
    <meta data-rh="true" name="twitter:creator" content="@SagarBisht" />
    <meta
      data-rh="true"
      name="twitter:description"
      content="The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The async attribute is same as defer. It indicate to the browser that the script file can."
    />
    <meta
      data-rh="true"
      name="twitter:image:src"
      content="https://sagarbisht.com/admin/images/2100295343.png"
    />
    <meta data-rh="true" name="twitter:site" content="@SagarBisht" />
    <meta
      data-rh="true"
      name="twitter:title"
      content="What are defer and async attribute on a script tag"
    />
    <meta
      data-rh="true"
      property="og:description"
      content="The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The async attribute is same as defer. It indicate to the browser that the script file can"
    />
    <meta
      data-rh="true"
      property="og:image"
      content="https://sagarbisht.com/admin/images/2100295343.png"
    />
    <meta data-rh="true" property="og:site_name" content="SAGAR" />
    <meta
      data-rh="true"
      property="og:title"
      content="What are defer and async attribute on a script tag"
    />
    <meta data-rh="true" property="og:type" content="article" />
    <meta data-rh="true" property="og:url" content="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag" />
    <meta data-rh="true" name="parsely-link" content="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag" />

    <meta
      data-rh="true"
      property="description"
      content="The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The async attribute is same as defer. It indicate to the browser that the script file can"
    />
    <meta name="keywords" content="defer  attribute, async attribute, render blocking, javascript">

    <link
      data-rh="true"
      rel="apple-touch-icon"
      sizes="152x152"
      href="https://sagarbisht.com/admin/images/1393441182.png"
    />
   
    <link
      data-rh="true"
      rel="icon"
      href="https://sagarbisht.com/admin/images/1393441182.png"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@362&display=swap"
      rel="stylesheet"
    />
    <script data-rh="true" type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Article",
        "headline": "What are defer and async attribute on a script tag",
        "datePublished": "123-7-2021",
        "url": "http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag",
        "name": "SagarBisht",
        "description": "The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The async attribute is same as defer. It indicate to the browser that the script file can",
       
          "@type": "ImageObject",
          "url": "https://sagarbisht.com/admin/images/1663110485.png",
          "width": 484,
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
      h2,
      h4,
      h5,
      .p-restrict-line {
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
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
      .content-width {
        display: flex;
        
        justify-content: space-between;
        margin: 0 auto;
        height:60px;
      }

      .logo {
        width: 100%;
        height: 50px;
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

      main {
        margin-left: 50px;
        margin-right: 50px;
      }

      #sidebar-menu-btn {
        background: 0 0;
        border: 0;

        font-weight: 700;
        font-size: 28hipx;
      }
      .amp-custom-sidebar-header {
        line-height: 3.5rem;
        min-height: 3.5rem;
        color: #fff;
      }
      #sidebar-close {
        cursor: pointer;
        color: #000000;
        float: left;
        margin-left: 15px;
      }

      .menu-head {
          margin-right: 1px;
          padding:8px 2px;
          background-color: #FAFAFA;

          -webkit-overflow-scrolling: touch;
          overflow-y: hidden;
          overflow-x:auto;
          max-height: 18px;
          width: 100%;
        }

      .menu-head-topic {
          color:#668EAD;
          
          font-size: 15px;
          margin:1px  5px;
          width: auto;
          height:22px;
          
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
      .branding {
        margin: 5px;
      }

      .container {
        display: flex;
        flex-wrap: wrap;
      
        justify-content: space-between;
      }
      .article-container {
        width: 760px;
        border-bottom: 1px solid #efefef;
        padding: 5px;
      }
      article > p {
        -webkit-line-clamp: unset;
        font-size: 18px;
        text-align: justify;
        line-height: 1.8;
      }
      article:first-letter {
        font-weight: bold;
        color: black;
        font-size: 28px;
      }
      p > a {
        text-decoration: none;
      }
      .sidebar-container {
        width: 365px;
        border-left: 1px solid #efefef;
        padding-left: 10px;
      }
      .related {
        margin-top: 8px;
        margin-right: 2px;
        padding: 1px;
        display: flex;
        flex-wrap: nowrap;
      
        justify-content: space-between;
      }

      .topic-to-read {
        margin-right: 1px;
        height: 225px;

        -webkit-overflow-scrolling: touch;
        overflow-x: auto;
      }
      .menu-topic {
        list-style-type: square;
        margin: 5px 2px 0px 1px;
        color: 706c6c;
        border: 1px solid #e6e6e6;
        padding: 2px 5px;
        font-size: 12px;
        display: inline-block;
        font-weight: lighter;
      }
      .more-news {
        display: flex;
        justify: space-between;
        
        margin-top: 18px;
      }
      .more-news-img {
        width: 150px;
      }
      .more-news-title {
        width: 690px;
      }
      .share{
        position:fixed;
        margin-left:0px;
        display:inline-block;
        float:left;
        z-index:1;
        bottom:6px;
        display:hidden;
        
      }
      amp-social-share{
        margin:-4px;
        padding:0px;
      }

      .subscribe-container{
        height:auto;
        justify-items:center;
        padding-top:30px;
      }
      .footer-menu{
        text-decoration:none;
        margin-right:8px;
        
        
      }
     .more-news>a{
      text-decoration:none;
      color:#000000;
     }
      @media only screen and (max-width: 725px) {
        main {
          margin: 5px;
        }
        .article-container {
          width: 100%;
        }
        .sidebar-container {
          width: 100%;
          border-left: none;
          padding-left: 1px;
        }
        .topic-to-read {
          width: 100%;
        }
        .share{
          display:inline;
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
          
          <amp-list width="180" height="90" layout="fixed" src="//sagarbisht.com/JSON/SEO/seo.json">
          <template type="amp-mustache">
          <a href="{{siteURL}}">

            <amp-img
              src="../{{logo}}"
              layout="responsive"
              width="200"
              height="50"
              alt="{{siteTitle}}"
            ></amp-img>
            </a>
            </template>
            </amp-list>
        </div>
        <button
          id="sidebar-menu-btn"
          style="margin-right:5px; "
          on="tap:sidebar.toggle"
        >
          ☰
        </button>
      </div>
    </header>
     <amp-carousel class="menu-head" height="50" layout="fixed-height" type="carousel" role="region" aria-label="Basic usage carousel">
 <?php 
 $quey=mysqli_query($conn,"SELECT * FROM category ");
  while($resul=mysqli_fetch_assoc($quey)){ ?>
  <a href="../category.php?category=<?php echo $resul["name"] ?>" class=" menu-head-topic" style="color: #b7b7b7;"> <i> <?php echo $resul["name"] ?></i></a>
  <?php } ?>

</amp-carousel>
    <!--Sidebar-->
     <amp-sidebar id="sidebar"  style="width:250px"layout="nodisplay" side="right">
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
       <h2>
         Category
       </h2>
       <amp-list width="250" height="800" src="//sagarbisht.com/JSON/categories/categories.json" layout="responsive">
         
         <template type="amp-mustache">
           <li class="li-category"><a href="https://sagarbisht.com/category.php?category={{name}}">{{name}}</a></li>
         </template>
       </amp-list>
     
     
    </amp-sidebar>

    <!-- Advertizement-->
    
        <div class="ad-container">
        <amp-list width="768" height="90" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
      <template type="amp-mustache">
          <amp-ad width="100vw" height="100px"
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
        </template
    ></amp-list></div> 
    <main>
      
      <div class="container">
        <div class="article-container">
          <amp-img
            width="740"
            height="500"
            layout="responsive"
            src="https://sagarbisht.com/admin/images/2100295343.png"
          ></amp-img>
          <small class="category" style="color:#04A77A;">#Web Development
          &nbsp&nbsp&nbsp</small>
          <small> Sagar Bisht </small>
          <small> 23-7-2021 </small>
          <h1 style="line-height:1.2; margin:1px;">
            What are defer and async attribute on a script tag
          </h1>

          <br />
          <div class="share">
 
          <amp-social-share
                            
                            width="40"
  height="40"
  type="twitter"
  aria-label="Share on Twitter"
></amp-social-share><br>
          <amp-social-share
                            
  type="linkedin"
  width="40"
  height="40"
  data-param-text="Check out this article: TITLE - CANONICAL_URL"
  data-param-url="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag"
  aria-label="Share on LinkedIn"
>
</amp-social-share><br>
          <amp-social-share
                       
  type="whatsapp"
  width="40"
  height="40"
  data-param-text="Check out this article: TITLE - CANONICAL_URL"
  data-param-url="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag"
  aria-label="Share on LinkedIn"
>
</amp-social-share><br>
          <amp-social-share
 
  type="facebook"
  width="40"
  height="40"
  data-param-text="Check out this article: TITLE - CANONICAL_URL"
  data-param-url="http://sagarbisht.com/Web Development/What-are-defer-and-async-attribute-on-a-script-tag"
  aria-label="Share on Facebook"
>
</amp-social-share>
            
        </div>

          <article style="font-size:18px;">
            
             <p>The tag has two attributes, <strong>async </strong>and <strong>defer</strong>, that can give us more control over how and when external files are fetched and executed. Async allows execution of scripts asynchronously and defer allows execution only after the whole document has been parsed.</p><p>When Browser get webpage from the server, It started building <a href="https://www.geeksforgeeks.org/dom-document-object-model/">DOM </a>tree by parsing <a href="https://www.geeksforgeeks.org/html-tutorials/">HTML</a>. During this process, if parser encounters a script, it stop and &nbsp;wait for script to download, hand over control to the JavaScript runtime and let the script to execute and only then parse HTML further. This is how the web browser &nbsp;process the pages.</p><p>But, Sometimes if script take too much time to download, or may be script not found. This will cause parser not to parse webpage further or may take too long time and webpage will not load fast in visitor browser. This will give bad experience to website visitor( Visitor thinks that site is slow and leave the page.). This is called <strong>Render blocking.</strong></p><p>To overcome this render blocking problem, <strong>async </strong>and <strong>defer </strong>attributes are come in use.</p><h3>Defer Attribute</h3><p>The defer attribute is a Boolean attribute. &nbsp;The defer attribute tells the parser ( browser) not to wait for the script to fetch, execute. Instead, the browser will continue to process the HTML, build DOM tree. The script loads in the background, and then runs when the DOM is fully built. Note that, the defer attribute is only for external scripts (and should only be used if the src attribute is present).</p><p>In other words:</p><ul><li>Scripts with defer never block the page.</li><li>Scripts with defer always execute when the DOM is ready (but before DOM Content Loaded event).</li></ul><h3>Async &nbsp;Attribute</h3><p>The async attribute is same as defer. It indicate to the browser that the script file can be executed asynchronously. It load in background without stopping the execution of webpage(DOM tree to build). But, the difference is that it's not wait &nbsp;DOM to fully build( Parser to execute whole HTML). Once the script downloaded it will execute even DOM is fully loaded or not.</p><p>In other words, async scripts load in the background and run when ready. The DOM and other scripts don’t wait for them, and they don’t wait for anything. A fully script that runs when it will loaded.</p>
           
          </article>
        </div>
        <div class="sidebar-container">
          <!-- Advertizement-->
          <center>
            <div class="ad-container">
            <amp-list width="468" height="300" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
           <template type="amp-mustache">   
             <amp-ad width="100vw" height="320px"
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
          </center>
          <hr />
          <!-- related news--->
          <h3>
            Related
          </h3>
          <amp-list
            width="auto"
            height="500"
            layout="fixed-height"
            src="//sagarbisht.com/JSON/related.php?id=249"
          >
            <template type="amp-mustache">
              <div class="related">
                <div style="width:265px;">
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
                <div style="width:100px;">
                  <amp-img
                    src="https://sagarbisht.com/{{featuredImage}}"
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
          <!-- Advertizement-->
          <center>
            <div class="ad-container">
              <amp-list width="350" height="280" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
           <template type="amp-mustache">   
               <amp-ad width="100vw" height="220px"
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
          </center>
          <!-- more topics-->
          <h3>
            More Topic
          </h3>
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
                  <a href="https://sagarbisht.com/category.php?category={{name}}" class=" menu-topic" style="color:{{color}}"> <i> {{name}}</i></a>
                </template></amp-list
              >
            </div>
          </div>
        </div>
      </div>
      <div>
        <!--More to read-->
        <amp-list
          width="1000"
          height="1200"
          layout="responsive"
          src="//sagarbisht.com/JSON/News/article.php?id=249"
          binding="refresh"
        >
          <template type="amp-mustache">
            <div class="more-news">
              <div class="more-news-title">
                <small class="category" style="color:#FFC017;"
                  >#{{category}}</small
                >
                <a href="{{url}}" style="text-decoration:none;color:#000000;">
                <h4 style="margin-top:1px; margin-bottom:1px; font-size:22px;">
                  {{title}}
                </h4>
                <p class="p-restrict-line" style="margin:1px; ssont-size:16px;">
                  {{description}}
                </p>
                <small>{{date}} </small>
              </div>
              <div class="more-news-img">
                <amp-img src="https://sagarbisht.com/{{featuredImage}}" layout="fixed" width="140" height="140">
                </amp-img>
              </div>
              </a>
            </div> </template
        ></amp-list>
        <div>
         <!-- Advertizement-->
          <center>
            <div class="ad-container">
              <amp-list width="350" height="280" layout="responsive" src="//sagarbisht.com/admin/Advertizement/adsense.json">
           <template type="amp-mustache">   
               <amp-ad width="100vw" height="220px"
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
          </center>
        
        </div>
      </div>
    </main>
     <footer>
      
    </footer>

      <amp-list
        width="250"
        height="50"
        src="//sagarbisht.com/admin/Advertizement/adsense.json"
        layout="responsive"
      >
        <template type="amp-mustache">

     <amp-sticky-ad layout="nodisplay">
        <amp-ad width="100vw" height="220px"
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
      
  </body>
  <?php require("../track.php")?> 
</html>



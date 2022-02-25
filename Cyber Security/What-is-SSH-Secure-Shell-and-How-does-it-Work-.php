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
    <title>What is SSH (Secure Shell) and  How does it Work?</title>
    <link rel="canonical" href="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-" />
    <meta data-rh="true" name="theme-color" content="#000000" />
    <meta data-rh="true" name="twitter:app:name:iphone" content="NewsPortal" />
    <meta data-rh="true" name="twitter:app:id:iphone" content="828256236" />
    
   
 
    <meta data-rh="true" property="fb:app_id" content="542599432471018" />
    <meta data-rh="true" name="robots" content="index,follow" />
    <link rel="amphtml" href="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-" />
    <meta
      data-rh="true"
      name="title"
      content="What is SSH (Secure Shell) and  How does it Work?"
    />
    <meta
      data-rh="true"
      name="description"
      content="SSH is a network protocol for operating network services over an unsecured network. Or it is a remote network protocol to  control remote servers over the internet."
    />
    <meta data-rh="true" name="twitter:card" content="summary_large_image" />
    <meta data-rh="true" name="twitter:creator" content="@SagarBisht" />
    <meta
      data-rh="true"
      name="twitter:description"
      content="SSH is a network protocol for operating network services over an unsecured network. Or it is a remote network protocol to  control remote servers over the internet.."
    />
    <meta
      data-rh="true"
      name="twitter:image:src"
      content="https://sagarbisht.com/admin/images/1337648915.png"
    />
    <meta data-rh="true" name="twitter:site" content="@SagarBisht" />
    <meta
      data-rh="true"
      name="twitter:title"
      content="What is SSH (Secure Shell) and  How does it Work?"
    />
    <meta
      data-rh="true"
      property="og:description"
      content="SSH is a network protocol for operating network services over an unsecured network. Or it is a remote network protocol to  control remote servers over the internet."
    />
    <meta
      data-rh="true"
      property="og:image"
      content="https://sagarbisht.com/admin/images/1337648915.png"
    />
    <meta data-rh="true" property="og:site_name" content="SAGAR" />
    <meta
      data-rh="true"
      property="og:title"
      content="What is SSH (Secure Shell) and  How does it Work?"
    />
    <meta data-rh="true" property="og:type" content="article" />
    <meta data-rh="true" property="og:url" content="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-" />
    <meta data-rh="true" name="parsely-link" content="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-" />

    <meta
      data-rh="true"
      property="description"
      content="SSH is a network protocol for operating network services over an unsecured network. Or it is a remote network protocol to  control remote servers over the internet."
    />
    <meta name="keywords" content="SSH, what is SSH, Secure Shell, How to use SSH, How SSH work, Network Protocal">

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
        "headline": "What is SSH (Secure Shell) and  How does it Work?",
        "datePublished": "112-7-2021",
        "url": "http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-",
        "name": "SagarBisht",
        "description": "SSH is a network protocol for operating network services over an unsecured network. Or it is a remote network protocol to  control remote servers over the internet.",
       
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
            src="https://sagarbisht.com/admin/images/1337648915.png"
          ></amp-img>
          <small class="category" style="color:#04A77A;">#Cyber Security
          &nbsp&nbsp&nbsp</small>
          <small> Sagar Bisht </small>
          <small> 12-7-2021 </small>
          <h1 style="line-height:1.2; margin:1px;">
            What is SSH (Secure Shell) and  How does it Work?
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
  data-param-url="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-"
  aria-label="Share on LinkedIn"
>
</amp-social-share><br>
          <amp-social-share
                       
  type="whatsapp"
  width="40"
  height="40"
  data-param-text="Check out this article: TITLE - CANONICAL_URL"
  data-param-url="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-"
  aria-label="Share on LinkedIn"
>
</amp-social-share><br>
          <amp-social-share
 
  type="facebook"
  width="40"
  height="40"
  data-param-text="Check out this article: TITLE - CANONICAL_URL"
  data-param-url="http://sagarbisht.com/Cyber Security/What-is-SSH-Secure-Shell-and-How-does-it-Work-"
  aria-label="Share on Facebook"
>
</amp-social-share>
            
        </div>

          <article style="font-size:18px;">
            
             <p><strong>SSH </strong>or<strong> Secure Shell</strong> &nbsp;also known as <strong>SSH Protocol</strong> is a network protocol that give user, particularly system administrator &nbsp;a secure way to operating network services over an unsecured network. Or it is a remote network protocol to &nbsp;control remote servers over the internet. Secure communication provides a strong password authentication and encrypted communication in a insecure channel. &nbsp;SSH uses<a href="https://www.geeksforgeeks.org/cryptography-and-its-types/"> cryptography</a> technology to ensure all communication in an encrypted manner &nbsp;between the host and the client. Host refers to the remote server you are trying to access, while the client is the computer you are using to access the host. Basically, SSH client is an software program which uses the secure shell protocol to connect to a remote server. SSH is widely used by network administrators for managing there remote system and application , enabling them to log in to another computer over a network, execute commands and move files from one computer to another. The first version of SSH &nbsp;was SSH-1 appeared in 1995 designed by Tatu Ylönen, a researcher at Helsinki University of Technology that &nbsp;now considered to be deprecated and not safe to use. The current version of Secure Shell protocols is SSH-2, &nbsp;that was adopted as a Standards Track specification by the Internet Engineering Task Force (IETF) in 2006. This algorithm allows client and the server to arrive at a shared encryption key which will be used &nbsp;to encrypt the entire communication session.</p><p>Suppose you want to send a Message to one of your friends. Without SSH, it can be opened and read by middle man(attacker). But if you will send it using SSH protocol, it will be encrypted and secured with the public key of the receiver, and only the receiver can open it using its private key.</p><p>There are three different &nbsp;types of encryption technologies used by SSH:</p><ol><li>Symmetrical encryption</li><li>Asymmetrical encryption</li><li>One-way Hashing</li></ol><h4><strong>Symmetrical Encryption&nbsp;</strong></h4><p>Symmetrical encryption is a type of encryption where &nbsp;only one key (secrete key) is used for both encryption and decryption. This is also known as<strong> shared key encryption. </strong>In this encryption, one problem arise at the time of initial key exchange. if a attacker &nbsp;is present during the key exchange, he could know the key and can use it to decrypt the message. This problem can be solved using Key exchange algorithms like <a href="https://www.geeksforgeeks.org/implementation-diffie-hellman-algorithm/">Diffie-Hellman key exchange</a> that use asymmetrical encryption.</p><h4><strong>Asymmetrical Encryption</strong></h4><p>In Asymmetrical encryption , there is a pair of keys- public key and private key, for encryption and decryption. The public key is openly distributed and shared with all parties. The private key is private to the user only and cannot be shared with any other. Public key is saved on SSH server and private key save locally on SSH client. The Message is encrypted using public key and can only decrypted using private key. It is very secure technique, even attacker know the encryption algorithm and public key. He cannot able to decrypt the message until he don't know the private key.</p><h4><strong>One-way Hashing</strong></h4><p><strong>&nbsp;</strong>In one way hashing, a hash function is used to generate a unique fixed length of code for each input known as hash code that cannot be exploited. It is &nbsp;impossible to generate the input from the hash. This makes them practically impossible to reverse. I basically use <a href="https://www.geeksforgeeks.org/what-is-hmachash-based-message-authentication-code/">Hash-based Message Authentication Codes or HMAC</a> to ensure that messages reached in complete and unmodified form (integrity). Regardless of the data’s size, type, or length, the hash that any data produces is always the same length.&nbsp;</p><p>In this technique, &nbsp;Each message will append with MAC (Message authentication code), which will have symmetric key, packet sequence number, and message content. These components form the hash function that generate a uninformative string (encrypted form of message). This string will send to SSH server. SSH server will &nbsp;be have same information, so SSH server also generate the hash function, if the generated hash will be same as received hash. it means message is unmodified (integrity proved).</p><h3>How does SSH work?</h3><p><strong>SSH client</strong> is an software program which uses the secure shell protocol to connect to a remote system. <strong>SSH server</strong> is a software program which uses the secure shell protocol to accept connections from remote System (SSH client).</p><p>When an SSH client makes a request &nbsp;to access a remote server. Server first authenticates the client. Server will generate the random string and encrypt it using the client public key and will send it to the client. Now, if the client is authentic, it will decrypt the encrypt message sent by the server using its private key. If a client is able to decrypt the encrypted data, it will send acknowledgement(decrypted message) to the server. &nbsp;This is how an SSH client will be authenticated (verified). &nbsp;</p><p>After authentication, a secure channel(connection) will be created for the communication. Secure channel means data will transmit in encrypted format and &nbsp;no other third party will be able to access that data.</p><p>This is how SSH also provides confidentiality and integrity of data over unsecured networks. Confidentiality means &nbsp;data should be secure from unauthorized view or access and integrity means</p><p>In Mac and Linux operating systems, terminals can be used to access SSH. In the window, we will need &nbsp;third party software (SSH client) &nbsp;to establish an SSH connection. The most popular SSH client is PuTTY.</p><h3>Architecture Layer of SSH</h3><p>The SSH protocol have an open architecture. Hence, other than secure shell, it can be used for many other purposes. The SSH architecture is made-up of three &nbsp;layers:</p><ol><li>Transport Layer</li><li>User-authentication layer</li><li>Connection Layer</li></ol><h4>Transport Layer</h4><p>Transport layer runs on top of TCP/IP. This layer &nbsp;handle initial key exchange as well as it is responsible for handling server authentication, set up encryption, compression, and integrity verification. It works as an interface for sending and receiving plaintext packets with sizes up to 32, 768bytes.</p><h4>User Authentication Layer</h4><p>As its name, user authentication layer is responsible for client authentication to the server and provides various authentication methods. When SSH client is prompt for a password. That password is basically for client authentication, not for server. The server merely responds to the client's authentication requests.</p><h4>Connection Layer</h4><p>This layer is responsible for defining the concept of channels, channel requests and global requests through which SSH services are provided. At a same time, A single SSH can host multiple channels , and can transfer data in both directions. The connection layer multiplexes the encrypted tunnel into several logical channels.</p><p>SSH was designed as a replacement for Telnet and for unsecured remote shell protocols such FTP. Those protocols send information, passwords in plaintext which make them unsecured. SSH organizes the secure connection by authenticating the client and opening the correct shell environment if the verification is successful. SSH operates on Transmission Control Protocol TCP port 22 by default (it can be changed) and uses client server architecture. SSH uses the asymmetric key cryptography to authenticate the client.</p><p>SSH can be used to:-</p><ul><li>Secure remote access to resources.</li><li>Remote execution of commands on host machine.</li><li>Delivery of software patches and updates.</li><li>Interactive and automated file transfers between local machine and remote server.</li><li>For forwarding a port.</li><li>By using SSH, we can set up the automatic login to a remote server such as OpenSSH.</li></ul><p>The SSH protocol protects the network from various attacks such as IP source routing, IP spoofing and DNS spoofing. Today, the protocol is used for managing &nbsp;more than &nbsp;half of world’s web servers . Cyber security specialists and system administrators use it to configure, manage, maintain, and operate &nbsp;firewalls, routers, switches, and servers in the millions of critical networks and environments of our digital world. It is also used inside many file transfer and systems management solutions. Yet there is no known exploitable &nbsp;vulnerabilities in SSH-2 . But information leaked by <a href="https://en.wikipedia.org/wiki/Edward_Snowden">Edward Snowden</a> in 2013 when he was an employee at Central Intelligence Agency (CIA). He suggested the National Security Agency &nbsp;may be able to decrypt some SSH traffic.&nbsp;</p>
           
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
            src="//sagarbisht.com/JSON/related.php?id=241"
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
          src="//sagarbisht.com/JSON/News/article.php?id=241"
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



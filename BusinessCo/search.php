<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">    
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
  <!--[if lt IE 8]>
      <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
  <![endif]-->
  <!--[if lt IE 9]>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header>
    <div class="container">
      <div class="row">
          <div class="span12">
              <div class="clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="index.html"><img src="images/logo.png" alt=""></a><span>global communication solutions</span></h1>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Call Us: <span>+1 234 567 89 00</span><br>E-mail: <a href="#">email@companyname.com</a></span>
                    </div>
              </div>
           </div>
      </div>   
    </div>
    
    <!--==============================Nav=================================-->          
    <div id="nav_section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner navbar-inner_">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                      <div class="nav-collapse nav-collapse_ collapse">
                          <ul class="nav sf-menu">
                            <li class="active li-first"><a href="index.html">Home</a></li>
                            <li class="sub-menu"><a href="index-1.html">about</a>
                              <ul>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Company Profile</a></li>
                                <li><a href="#">News and events</a></li>
                              </ul>
                            </li>
                            <li><a href="index-2.html">services</a></li>
                            <li><a href="index-3.html">partners</a></li>
                            <li><a href="index-4.html">projects</a></li>
                            <li><a href="index-5.html">contacts</a></li>
                          </ul>
                      </div>
                      <ul class="social-icons">
                          <li><a href="#"><img src="images/twitter.gif" alt=""></a></li>
                          <li><a href="#"><img src="images/flickr.gif" alt=""></a></li>
                          <li><a href="#"><img src="images/facebook.gif" alt=""></a></li>
                          <li><a href="#"><img src="images/linkedin.gif" alt=""></a></li>
                          <li><a href="#"><img src="images/youtube.gif" alt=""></a></li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
    <!--==============================End Nav=================================-->

</header>


<section id="content">
  <div class="container">
    <div class="row">
    	<div class="span12">
            <h4>Search result:</h4>
            <div id="search-results"></div>
		  </div>  
    </div>        
  </div>  
</section>


<!--==============================Footer=================================--> 
<footer>
   <div class="container">
    <div class="row">
      <div class="span8">
        <ul class="footer-menu">
            <li><a href="index.html" class="current">home</a></li>
            <li><a href="index-1.html">about</a></li>
            <li><a href="index-2.html">services</a></li>
            <li><a href="index-3.html">partners</a></li>
            <li><a href="index-4.html">projects</a></li>
            <li><a href="index-5.html">contact us</a></li>
        </ul>
      </div>

      <div class="span4">
        <p class="phone">+1 123<span style="display:none">no skype addon</span> 456 78 90</p>
      </div>
      <div class="span12">
        WORLDCOM  ©  2012. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;   <a href="index-6.html">Privacy Policy</a> <!-- {%FOOTER_LINK} -->
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="search/search.js"></script>

<script>
$(document).ready(function() {
	/////// icons
	//$(".social li").find("a").css({opacity:0.6});
	$(".social li a").hover(function() {
		$(this).stop().animate({opacity:0.6 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:1 }, 400, 'easeOutExpo' );		   
	});

	



}); //
$(window).load(function() {
	//



}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body>
<div id="main">

<header>
<div class="container">
<div class="row">
<div class="span12 clearfix">
<div class="top1">
	<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
</div>	
<div class="top2">
<div class="search-form-wrapper clearfix">
	<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
		<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
		<a href="#" onClick="document.getElementById('search-form').submit()"></a>
	</form>
</div>
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
				<li class=""><a href="index.html">Home</a></li>				
				<li class="sub-menu sub-menu-1"><a href="index-1.html">Company<em></em></a>
					<ul>
						<li><a href="index-1.html">About us</a></li>
						<li class="sub-menu sub-menu-2"><a href="index-1.html">History<em></em></a>
							<ul>
								<li><a href="index-1.html">lorem ipsum dolor</a></li>
								<li><a href="index-1.html">sit amet</a></li>
								<li><a href="index-1.html">adipiscing elit</a></li>
								<li><a href="index-1.html">nunc suscipit</a></li>
								<li><a href="404.html">404 page not found</a></li>
							</ul>
						</li>
						<li class="sub-menu sub-menu-2"><a href="index-1.html">Our team<em></em></a>
							<ul>
								<li><a href="index-1.html">lorem ipsum dolor</a></li>
								<li><a href="index-1.html">sit amet</a></li>
								<li><a href="index-1.html">adipiscing elit</a></li>
								<li><a href="index-1.html">nunc suscipit</a></li>									
							</ul>
						</li>
						<li><a href="index-1.html">Media</a></li>						
					</ul>						
				</li>
				<li class="sub-menu sub-menu-1"><a href="index-2.html">Services<em></em></a>
					<ul>
						<li><a href="index-2.html">Lorem ipsum dolor</a></li>						
						<li><a href="index-2.html">Sit amet consectetue</a></li>
						<li><a href="index-2.html">Adipiscing elit</a></li>						
						<li><a href="index-2.html">Nunc suscipit</a></li>						
					</ul>						
				</li>
				<li><a href="index-3.html">Products</a></li>
				<li><a href="index-4.html">Solutions</a></li>											
				<li><a href="index-5.html">Contacts</a></li>											
			</ul>
		</div>
	</div>
</div>






</div>
</div>	
</div>	
</div>	
</header>

<div id="content">
<div class="container">

	<h1>Search Results</h1>
	
<div class="row">
	<div class="span12 pad_bot1">
		<div id="search-results"></div>
	</div>
</div>	




</div>
</div>

<div class="join">
<div class="container">
<div class="row">
<div class="span6">

<div class="join1">
	Join us and save<br>
your time and money!
</div>
<div class="join1-corner"></div>



</div>
<div class="span6">
	<div class="join2">
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpatorem ipsum dolor sit amet, consectetuer adipiscing el. Ut wisi enim ad minim ven iam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut commodo consequat.
		</p>
		<a href="#" class="button1">Join Now</a>
	</div>
</div>	
</div>	
</div>	
</div>

<footer>
<div class="container">
<div class="row">
<div class="span12">
<div class="bot clearfix">
<div class="bot1">
<div class="menu_bot">
    <ul id="menu_bot" class="clearfix">
      <li><a href="index.html">Home</a></li>
      <li><a href="index-1.html">Company</a></li>
      <li><a href="index-2.html">Services</a></li>
      <li><a href="index-3.html">Products</a></li>
      <li><a href="index-4.html">Solutions</a></li>
      <li><a href="index-5.html">Contacts</a></li>          
    </ul>
</div>
</div>	
<div class="bot2 clearfix">
<div class="txt1">Follow Us:</div>
<div class="social_wrapper">
	<ul class="social clearfix">
	    <li><a href="#"><img src="images/social_ic1.jpg"></a></li>
	    <li><a href="#"><img src="images/social_ic2.jpg"></a></li>
	    <li><a href="#"><img src="images/social_ic3.jpg"></a></li>
	</ul>
</div>
</div>
</div>
<div class="copyright">Copyright © 2013. All rights reserved.</div>
</div>	
</div>	
</div>		
</footer>





	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
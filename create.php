
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Captive Green 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Captivegreen by TEMPLATED</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Marvel|Delius+Unicase' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" >
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>blogmythought </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.4-dist/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Captive <span>Green</span></a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#">Homepage</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Photos</a></li>
					<li><a href="#">About</a></li>
					<li><a href="register1.php">HI!<?php session_start(); echo $_SESSION["user"];?></a></li>
					
					
				</ul>
			</div>
			
		</div>
		<div id="banner"></div>
		<!-- end #header -->
		<div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><a href="#">Create New post </a></h2>
				
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<!--<p>This is <strong>Captive Green </strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photo used in this template is form <a href="http://pdphoto.org/">pdphoto.org</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)</p>
						<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
						<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p-->
						



<form action="store.php" method="post">
<label>Title:</label>
&nbsp;
&nbsp;
&nbsp;
<input type="text" name="title " class="form-control">
<br>
<b>Related:</b>
&nbsp;
<input type="text" name="related" class="form-control">
<br>
<b>Content:</b>
<textarea name="content"   style="height:200px; width:510px;" class="form-control"></textarea>
<br>
<input type="submit">
</form>




					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
					<p class="meta"><span class="date">December 24, 2011</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus.</p>
						<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="#">Consecteteur hendrerit </a></h2>
					<p class="meta"><span class="date">December 20, 2011</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus.</p>
						<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<div id="search" >
							<form method="get" action="#">
								<div>
									
								</div>
							</form>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</li>
					<li>
						<h2>Aliquam tempus</h2>
						<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
					</li>
					<li>
						<h2>Categories</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
					<li>
						<h2>Blogroll</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
					<li>
						<h2>Archives</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #page -->
		<div id="footer">
			<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
		</div>
	</div>
</div>
<!-- end #footer -->
</body>
</html>

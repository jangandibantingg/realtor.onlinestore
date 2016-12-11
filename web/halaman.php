<?php
error_reporting(0);
include "../config/koneksi.php";
include "../config/seo.php";





?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo "$_GET[read] Platinum-Realtors"; ?></title>		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../gambar/favicon.ico">                   
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>
		<script>
		$(window).load(function() {
			$('.blueberry').blueberry();
		});
		</script>
	</head>
	<body>
		<!--  start-wrap -->
		<div class="wrap">
			<!--  start-header -->
			<div class="header">
				<!--  start-logo -->
				<div class="logo">
					<a href="#"><img src="images/logo.png" title="logo"/></a>
				</div>
				<!--  end-logo -->
				<!--  start-search-info -->
				<div class="search-form">
					<input type="text">
					<input type="submit" value="">
				</div>
				<div class="clear"> </div>
				<div class="info">
					<p>Browse Online or Call Us Toll Free – <span>(0358) 720-331</span></p>
				</div>
				<div class="clear"> </div>
					<?php
					include "menu/menu.php";
					?>
						<!--  end-header -->
						<!--  Img-Slider -->
						<div class="clear"> </div>
				<div class="slider">
					<div class="blueberry">
				      <ul class="slides">
				        <li><img src="images/slider3.png" title="slider1"/ ></li>
				        <li><img src="images/slider2.png" title="slider2"/></li>
				        <li><img src="images/slider4.png" title="slider3"/></li>
				        <li><img src="images/slider2.png" title="slider4"/></li>
				        <div class="clear"> </div>
				       </ul>
				    </div>
					<div class="clear"> </div>
				<!--  End-of image slider -->
			   <?php 
			   include "left/left.php";
			   if ($_GET[read] == 'home')
			   {
			   include "home/home.php";
			   }
			   elseif ($_GET[read] == 'contact' )
			   {
			   include "kontak/kontak.php";   
			   }
			   else
			   {
			   include "view/view.php";   
			   }
			   ?>
				
	</div>
	<div class="clear"> </div>
	<div class="hr">
	</div>

	<div class="copy-right">
			<p><a href="#">w3layouts || Travaweb </a> © 2015  </p>
		</div>
	<div class="clear"> </div></div>
</body>
</html>

 <!-- Header.php  
	This is main header file. Sass is used for css and it is in 
	application/views/Home/stylesheets/screen.sass and changes
	are made in screen.css
-->

<html>
<head>
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Home/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Header start -->
	<header class="head" id="header">
		<nav class="navbar" id="main_nav">
		<ul class="unlist" id="unoderedlist">
			<li><a href="<?php echo base_url();?>index.php/home">About</a></li>
			<li><a href>Gallery</a></li>
			<li><a href>Form</a></li>
			<li><a href="<?php echo base_url();?>index.php/registration">Register</a></li>
			<li><a href="<?php echo base_url();?>index.php/signIn">Sign-in</a></li>
			<li><a href>Feedback</a></li>
		</ul>
		<nav id="bt-menu" class="bt-menu">
		<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
		<ul class="unlist1">
			<li><a href="<?php echo base_url();?>index.php/home">About</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href=>Form</a></li>
			<li><a href="<?php echo base_url();?>index.php/registration">Register</a></li>
			<li><a href="<?php echo base_url();?>index.php/signIn">Sign-in</a></li>
			<li><a href>Feedback</a></li>
		</ul>
		</nav>
		</nav>		
	</header>  <!-- Header Over  -->
</body>
<!-- Script files for mobile view  -->
 <script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
 <script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>
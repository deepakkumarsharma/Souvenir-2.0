<html>
<head>
	<title>Sign-In</title>
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Sign-in/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Sign-in/js/sign.js"></script>
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script>
</head>
</head>
<body>
<canvas id="canvas" class="canvas"></canvas>
	<div class="container">
		<div class="signin">		
			<h1 class="heading1">Sign In</h1>
			 <?php echo validation_errors(); ?> 
			<form class="form" method="post" action="<?php echo base_url();?>index.php/signIn/verify">
				<div class="area">
					<input type="email" name="email" id ="email" placeholder="E-mail" title="Email Address" required />
				</div>
				<div class="area">
					<input type="password" name="password" id="password" placeholder="Password" title="Password" required>
				</div>
				<input type="submit" value="Login"><br>
			</form>
			<div class="footer">
				<p class="p1">New Here?&nbsp;<a href="<?php echo base_url();?>index.php/registration">Sign Up</a></p>
			</div>
  			<p class="forget"><a href="#">Forget Password?</a></p>
		</div>
	</div>	
</body>
<!-- Script files for mobile view  -->
<script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
<script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>
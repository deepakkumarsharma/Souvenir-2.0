<html>
<head>
	<title>ResetPassword</title>
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Sign-in/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Animated video -->
	<video class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
	</video>

<!-- Validations Codeigniter  -->
<?php echo form_open(); ?>
<!-- Valdiations Over -->

	<div class="container">
		<div class="signin">		
			<h1 class="heading">Reset Password</h1>
			<form class="form" method="post" action="#">
                <div class="area">
                	<input type="password" name="Password" id ="password" placeholder="New Password" title="Minimum 8 letters or numbers"  onchange="form.Passconf.pattern = this.value;" pattern="[a-zA-Z0-9]{8,}" required />
                </div>
                <div class="area">
                   	<input type="password" name="Passconf" id ="password" placeholder="Confirm new password" title="Retype Password" pattern="[a-zA-Z0-9]{8,}" required />
                </div>
				<input type="submit" value="OKAY"><br>
			</form>
		</div>
	</div>	
</body>
<!-- Script files for mobile view  -->
<script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
<script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>

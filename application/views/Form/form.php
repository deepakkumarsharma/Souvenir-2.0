<!-- Form.php
	This is main home page. Sass is used for css and it is in 
	application/views/form/stylesheets/screen.sass and changes
	are made in screen.css
-->
<html ng-app>
<head>
	<title>Form</title>	
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Form/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.13/angular.min.js"></script>
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script></head>
<body>
	<div class="container performa">
	<header class="header">
		<h1 class="heading1">Yaadein</h1>
	</header>
        <div class="s_data shrink">
            <div class="content id_first-slide-text">
            	<form class="performa" method="post" accept-charset="utf-8" action="<?php echo base_url();?>Souvenir-2.0/index.php/form">
					<h2 class="name">Name</h2>
					<input type="text" ng-model="firstname" class="firstname" name="Firstame"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="First Name" required /><br>
					<input type="text" ng-model="middlename" class="middlename" name="Middlename"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Middle Name" /><br>
					<input type="text" class="lastname" name="Lastname"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Last Name" required /><br><br>
					<h2 class="name">Family</h2>
					<input type="text" class="fathername" name="Fathername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Father Name" required /><br>
					<input type="text" class="mothername" name="Mothername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Mother Name" required /><br><br>
					<h2 class="name">Personal Details</h2>
					<input type="number" class="postalcode" name="Postalcode"  pattern="[0-9]" title="Number Only." placeholder="Postal Code" required /><br>
					<input type="textarea" class="address" name="Address"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Address" required /><br>
					<p style="text-align: center;"><input type='submit' class="submit" value='Register'/></p>
				</form>	
        	</div>

        	<div class="verticalLine">
        	</div>

        	<div class="angular">
            	<h1 class="fname">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{firstname}}</h1>
            	<h1 class="mname">Middle Name : {{middlename}}</h1>
            </div>
            <div style="clear:both;">
           	</div>
    	</div>	
	</div>
</body>
<!-- Script files for mobile view  -->
<script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
<script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>
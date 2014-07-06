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
		<h1 class="heading1">Fill Form</h1>
	</header>
        <div class="s_data shrink">
            <div class="content id_first-slide-text">
            	<form class="performa" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/form">
					<!-- Student Data -->
					<h2 class="name">Name</h2><br>
					<input type="text" ng-model="firstname" class="firstname" name="Firstame"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="First Name" required /><br>
					<input type="text" ng-model="middlename" class="middlename" name="Middlename"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Middle Name" /><br>
					<input type="text" ng-model="lastname" class="lastname" name="Lastname"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Last Name" required /><br><br>
					<!-- Family -->
					<h2 class="name">Family Details</h2><br>
					<input type="text" ng-model="fathername" class="fathername" name="Fathername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Father Name" required /><br>
					<input type="text" ng-model="mothername" class="mothername" name="Mothername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Mother Name" required /><br><br>	
					<!-- Personal Details -->
					<h2 class="name">Personal Details</h2><br>
					<input type="tel" ng-model="telephone" class="telephone" name="Telephone" pattern="[0-9\s]+" title="Mobile Number" placeholder="Mobile Number" required /><br>	
					<input type="number" ng-model="postalcode" class="postalcode" name="Postalcode"  pattern="[0-9\s]+" title="Number Only." placeholder="Postal Code" required /><br>
					<input type="textarea" ng-model="address" class="address" name="Address"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Address" required /><br><br>
					<!-- Image -->
					<h2 class="name">Upload Photo</h2><br>
					<input id="uploadImage" class="uploadImage" ng-model="image" type="file" name="myPhoto" onchange="PreviewImage();" /><br>
					<p style="text-align: center;"><input type='submit' class="submit" value='Register'/></p>
				</form>	
        	</div>

        	<div class="verticalLine">
        	</div>

        	<div class="angular">
        		<!-- Image Preview -->
            	<img id="uploadPreview" style="width: 200px; height: 200px;" class="upload_image"/>{{image}}
            		<script type="text/javascript">
						function PreviewImage() {
					    	var oFReader = new FileReader();
					    	oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
					   			oFReader.onload = function (oFREvent) {
					    			document.getElementById("uploadPreview").src = oFREvent.target.result;
								};
					    	};
					</script>
				<!-- Firstname -->
            	<h1 class="first_name">First Name : {{firstname}}</h1>
            	<h1 class="middle_name">Middle Name : {{middlename}}</h1>
            	<h1 class="last_name">Last Name : {{lastname}}</h1><br>
            	<h1 class="father_name">Father Name : {{fathername}}</h1>
            	<h1 class="mother_name">Mother Name : {{mothername}}</h1><br>
            	<h1 class="ph_no">Mobile Numebr : {{telephone}}</h1>
            	<h1 class="postal_code">Postal Code : {{postalcode}}</h1>
            	<h1 class="add">Address : {{address}}</h1>	
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
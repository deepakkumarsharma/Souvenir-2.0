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
<!-- 	<!-- DOB Script and Css -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

 <body>
	<div class="container performa">
	<header class="header">
		<h1 class="heading1">Fill Form</h1>
	</header>
        <div class="s_data shrink">
            <div class="content">
				<?php echo form_open_multipart('form/do_upload');?>					
            	<form class="performa" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/form">
					
					<!-- Student Data -->
					<h2 class="name">Name</h2><br>
					<input type="text" ng-model="firstname" class="firstname" name="Firstname"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="First Name"  required  /><br>
					<input type="text" ng-model="middlename" class="middlename" name="Middlename"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Middle Name"  required /><br>
					<input type="text" ng-model="lastname" class="lastname" name="Lastname"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Last Name" required /><br><br>
					
					<!-- Family -->
					<h2 class="name">Family Details</h2><br>
					<input type="text" ng-model="fathername" class="fathername" name="Fathername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Father's Name"  required  /><br>
					<input type="text" ng-model="mothername" class="mothername" name="Mothername"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Mother's Name"  required  /><br><br>	
					
					<!-- Personal Details -->
					<h2 class="name">Personal Details</h2><br>
					<!-- Date Of Birth -->
					<input type="text" ng-model="dob" class="dob" name="DOB" title="D.O.B : date/month_name/year" pattern="[0-3]{1}[0-9]{1}[/]{1}(January|Ferburary|March|April|May|June|July|August|September|October|November|December|)[/]{1}[0-9]{4}" placeholder="D.O.B Eg: 29/June/2000" title="DOB"  required />
					<input type="number" ng-model="telephone" class="telephone" name="Mobile" title="Mobile Number" placeholder="Mobile Number"  required  /><br>	
					<input type="number" ng-model="postalcode" class="postalcode" name="Postalcode"  pattern="[0-9\s]+" title="Number Only." placeholder="Postal Code"  required  /><br>
					<input type="textarea" ng-model="address" class="address" name="Address"  pattern="[a-zA-Z\s]+" title="Characters Only." placeholder="Address"  required  /><br><br>

					<!-- Image -->
					<h2 class="name">Upload Photo</h2><br>	
					<input id="uploadImage" class="uploadImage" ng-model="image" type="file" name="userfile" onchange="PreviewImage();" size="20"  required /><br><br>
					
					<!-- Class Details -->
					<h2 class="name">Class Details</h2><br>
					<select name="Branch" class="branch" ng-model="branch" placeholder="Enter Branch Name" required >
                		<option value="Mechanical">Mechanical</option>
                		<option value="Production">Production</option>
                		<option value="Civil">Civil</option>
                		<option value="Computer Science">Computer Science</option>
                		<option value="Information Technology">Information Technology</option>
                		<option value="Electrical">Electrical</option>
                		<option value="Electronics and Communication">Electronics and Communication</option>
        			</select>
					<input type="email" ng-model="email" class="eMail" name="Email" placeholder="E-mail" title="Please Fill Valid Email Address"   /><br>
					<input type="number" ng-model="classronum" class="classronum" name="Classronum"  pattern="[0-9\s]+" title="Number Only." placeholder="Class Roll Numebr"    /><br>
					<input type="number" ng-model="unironum" class="unironum" name="Unironum"  pattern="[0-9\s]+" title="Number Only." placeholder="University Roll Numebr"    /><br>
					<textarea class="textarea" ng-model="textarea" name="Comment" placeholder="Enter your comment"   /></textarea><br><br>
					<p style="text-align: center;"><input type='submit' class="submit" value='Upload'/></p>
				<?php echo form_close();?>
				</form>	
        		
        	</div>

        	<div class="verticalLine">
        	</div>
			
			<!-- AngularJS -->
        	<div class="angular">
        		<!-- Image Preview -->
            	<img id="uploadPreview" style="width: 300px; height: 200px;" class="upload_image"/>{{image}}
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
            	<h1 class="d_o_b">D.O.B : {{dob}}</h1>
            	<h1 class="ph_no">Mobile Numeber : {{telephone}}</h1>
            	<h1 class="postal_code">Postal Code : {{postalcode}}</h1>
            	<h1 class="add">Address : {{address}}</h1>
            	<h1 class="field">Branch : {{branch}}</h1>
            	<h1 class="mailid">E-mail : {{email}}</h1>	
            	<h1 class="class">Class Roll Number : {{classronum}}</h1>
            	<h1 class="university">University Roll Number : {{unironum}}</h1>            		
            	<h1 class="comment">Comment : {{textarea}}</h1>            	
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
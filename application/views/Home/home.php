<!-- Home.php
	This is main home page. Sass is used for css and it is in 
	application/views/Home/stylesheets/screen.sass and changes
	are made in screen.css
-->

<html>
<head>
	<title>Sovuenir</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Home/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>application/views/Home/js/turn.js"></script>
</head>
<body>
<div class="container" id="main_container">	
	<!-- Background animated video -->
	<video class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.webm">
	</video>

<!-- SLIDES GOES FROM HERE -->

<!-- Slide 1 -->
<div class="slide1">
    <section class="s1sec">
        <div class="s1div">
        </div>
        	<img src="<?php echo base_url();?>application/views/Home/stylesheets/tasveer/Yaadein.png" alt="logo" class="img1">
        	<!-- <h1 class="s1Heading">Yaadein</h1> -->        
    </section>
</div>

<!-- Slide 1 Over -->

<!-- Slide 2 -->
<div class="slide2 wrap">
	<div class="transparent">	
		<div class="text2">
			<p class="slide2-description">No matter how far you are,<br><br>Yaadein brings you closer</p>
		</div>		
	</div>
</div>
<!-- Slide 2 over -->

<!-- Slide 3 -->
<div class="slide3">
    <div class="s_data shrink">
    	<h1 class="slide3heading">Turn Out The Pages Of Life</h1>
        <div class="content">
        </div>
        
		<div id="magazine" class="magazine">
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/front.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/page1.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/page2.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/page3.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/page1.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/page1.png);"></div>
			<div style="background-image:url(<?php echo base_url();?>application/views/Home/stylesheets/tasveer/lastpage.png);"></div>
		</div>

		<script type="text/javascript">
			$(window).ready(function() {
				$('#magazine').turn ({
					display: 'double',
					acceleration: true,
					gradients: !$.isTouch,
					elevation:50,
					when: {
						turned: function(e, page) {
						}
					}
				});
			});
			
			$(window).bind('keydown', function(e){
				if (e.keyCode==37)
					$('#magazine').turn('previous');
				else if (e.keyCode==39)
					$('#magazine').turn('next');	
			});
		</script>
       	<div style="clear:both;">
        </div>
    </div>
</div>

<!-- Slide 3 over -->

<!-- Slide 4 -->
<div class="slide4">
    <div class="s_data shrink">

   		<h1 class="teamHeading">The Team</h1><br>
		<p class="teamline">Dreamers, developers, designers,<br>we’re a talented bunch.</p>		
	
        <div class="content">
			<div class="slide3text">
			</div>
        </div>
		<ul class="team">
		<li>
			<div class="teams image1">
				<div class="description">
					<h3>Dr. H.S.Rai</h3>
					<p>Project Mentor</p>
				</div>
			</div>
		</li>
		<li>
			<div class="teams image2">
				<div class="description">
					<h3>Deepak</h3>
					<p>Team Leader</p>
				</div>
			</div>
		</li>
		<li>
			<div class="teams image3">
				<div class="description">
					<h3>Satwantjit Kaur</h3>
					<p>Core Developer<br>&<br>LaTeX Guru</p>
				</div>
			</div>
		</li>
		<li>
			<div class="teams image4">
				<div class="description">
					<h3>Ravina Singla</h3>
					<p>UI Developer<br>&<br>LaTeX Guru</p>
				</div>
			</div>
		</li>
		<li>
			<div class="teams image5">
				<div class="description">
					<h3>Kaushalendra Dubey</h3>
					<p>LaTeX Guru</p>
				</div>
			</div>
		</li>							
		</ul>
       	<div style="clear:both;">
        </div>
    </div>

<!-- Slide 5 -->
<div class="slide5">
	<!---------- Picture -------------->
	<div class="picture">
       	<div class="picture-text">
		    <div style="clear:both;">
		    </div>
        </div>
    </div>    
	<!------- Picture ends here ------->	
	<!-- Footer Starts here -->
		<footer>
		    <p class="wrapped footer-text"></p>
		</footer>
	<!-- Footer Ends -->    
	</div>
</div>
<!-- Slide 5 over -->

</div>
</body>
</html>

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
        	<!-- <img src="<?php echo base_url();?>application/views/Home/stylesheets/tasveer/Souvenir.png" alt="logo" class="img1"> -->
        	<h1 class="s1Heading">Yaadein</h1>
            <p class="s1tagline">Be like a photographer. Get your vision right, keep yourself focus, zoom in on your goals and your success will be a souvenir</p>        
    </section>
</div>

<!-- Slide 1 Over -->

<!-- Slide 2 -->
<div class="slide2">
</div>
<!-- Slide 2 over -->

<!-- Slide 3 -->
<div class="slide3" >
   <div id="slider1" class="csslider">
       <input type="radio" name="slides" id="slides_1" checked/>
       <input type="radio" name="slides" id="slides_2"  />
       <input type="radio" name="slides" id="slides_3" />
       <input type="radio" name="slides" id="slides_4" />
       <ul>
           <li>
               <div id="bg1" class="bg">
                   <div>
                       <h1>CSS Events</h1>
                       <p>When slide 3 is reached - play CSS animation!</p>
                   </div>
               </div>
           </li>
           <li>
               <div id="bg2" class="bg">
                   <div>
                       <h1>CSS Events</h1>
                       <p>When slide 3 is reached - play CSS animation!</p>
                   </div>
               </div>
           </li>
           <li>
               <div id="bg3" class="bg">
                   <div>
                       <h1>CSS Events</h1>
                       <p>When slide 3 is reached - play CSS animation!</p>
                   </div>
               </div>
           </li>
           <li>
              <div id="bg4" class="bg">
                   <div>
                       <h1>CSS Events</h1>
                       <p>When slide 3 is reached - play CSS animation!</p>
                   </div>
               </div>
           </li>
       </ul>
       <div class="navigation">
           <div>
               <label for="slides_1"></label>
               <label for="slides_2"></label>
               <label for="slides_3"></label>
               <label for="slides_4"></label>
           </div>
       </div>
   </div>
</div>

<!-- Slide 3 over -->
<!-- Slide 4 -->
<div class="slide4">
	<!-- header -->
	<header class="aboutHeader">
		<h1 class="slide4Heading">Nerds Behind This</h1>
	</header>
	<!-- header over -->

	<section class="sectionContainer">
		<!-- Part 1 -->
		<div class="section1 bg1-section">
			<article class="triangle1">
			</article>
		</div>
		<div class="section2 sectionPink">
			<article class="">
			</article>
		</div>

		<!-- Part 2 -->
		<div class="section2 sectionPink">
			<article class="">
			</article>
		</div>
		<div class="section1 bg2-section">
			<article class="triangle2">
			</article>
		</div>

		<!-- Part 3  -->
		<div class="section1 bg3-section">
			<article class="triangle3">
			</article>
		</div>
		<div class="section2 sectionPink">
			<article class="">
			</article>
		</div>

		<!-- Part 4 -->
		<div class="section2 sectionPink">
			<article class="">
			</article>
		</div>
		<div class="section1 bg4-section">
			<article class="triangle4">
			</article>
		</div>
	</section>

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
</body>
</html>

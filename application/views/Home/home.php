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
	<!-- Animated video -->
	<video class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
		<source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
	</video>

<!-- SLIDES GOES FROM HERE -->

<!-- Slide 1 -->
<div class="slide1">
    <section class="s1sec">
        <div class="s1div">                                  
        </div>
        <div class="s1div">
        	<h1 class="s1Heading">Souvenir</h1>
            <p class="s1tagline">Be like a photographer. Get your vision right, keep yourself focus, zoom in on your goals and your success will be a souvenir</p>
        </div>
    </section>
</div>

<!-- Slide 1 Over -->
<!-- Slide 2 -->
<div class="slide2">
</div>

<!-- Slide 3 -->
<div class="slide3">
<div class="slide2_container" >
        <div class="slide2_images">
            <div class="images" id="one">
                <div class="img_text">
                    <h1 class="heading">First</h1>
                    <p class="paragraph">This is the first slide</p> 
                </div>
            </div>
            <div class="images" id="two">
                <div class="img_text">
                    <h1 class="heading">Second</h1>
                    <p class="paragraph">This is the second slide</p>
                </div>
            </div>
            <div class="images" id="three"> 
                <div class="img_text">
                    <h1 class="heading">Third</h1>
                    <p class="paragraph">This is the third slide</p>
                </div>
            </div>
            <div class="images" id="four">
                <div class="img_text">
                    <h1 class="heading">Fourth</h1>
                    <p class="paragraph">This is the fourth slide</p>
                </div>
            </div>
            <div class="images" id="five">
                <div class="img_text">
                    <h1 class="heading">Five</h1>
                    <p class="paragraph">This is the fiveth slide</p>
                </div>
            </div>
        </div>
    </div>
</div>

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

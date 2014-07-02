<!-- feedback.php
        This is main home page. Sass is used for css and it is in 
        application/views/Feedback/stylesheets/screen.sass and changes
        are made in screen.css
-->
<html>
<head>
    <title>Feedback</title>
    <link href="<?php echo base_url();?>application/views/feedback/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
</head>
<body>
    <video  class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
        <source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
        <source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
    </video>

<!-- Validations Codeigniter  -->
<?php echo form_open(); ?>
<!-- Valdiations Over -->
<div class="conatiner">
   <div class="line">
       <h1 class="lineheading">Would like your</h1>
   </div>
    <div class="fb1"><h1>F</h1></div>
    <div class="fb2"><h1>E</h1></div>
    <div class="fb3"><h1>E</h1></div>
    <div class="fb4"><h1>D</h1></div>
    <div class="fb5"><h1>B<h1></div>
    <div class="fb6"><h1>A</h1></div>
    <div class="fb7"><h1>C</h1></div>
    <div class="fb8"><h1>K</h1></div>
    <div class="form-div">
        <form   action="<?php echo base_url();?>index.php/feedback" method="post">
            <input name="Username" type="text" placeholder="Name" pattern="[a-zA-Z]{5,}" title="3 or more Characters Only." class="name" required/>
            <input name="Email" type="email" class="email" placeholder="Email" title="Please Fill Valid Email Address" required/>
            <textarea name="Comment" type="text" class="comment" placeholder="Comment" title="Max 300words."required/></textarea>
            <div class="submit">
                <input type="submit" value="SEND" class="button-blue"/>
            </div>
        </form>
    </div>
</div>
</body>
</html>
         


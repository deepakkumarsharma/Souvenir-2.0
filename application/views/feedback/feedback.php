<html>
<head>
   <link href="<?php echo base_url();?>application/views/feedback/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
</head>
<body>
<?php echo form_open(); ?>
    <!-- Animated video -->
    <video class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
        <source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
        <source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
    </video>
    <div class="line">
        <h1 class="heading1">Would like your</h1>
    </div>

    <div class="side" id="s0"><h1>F</h1></div>
    <div class="side" id="s1"><h1>E</h1></div>
    <div class="side" id="s2"><h1>E</h1></div>
    <div class="side" id="s3"><h1>D</h1></div>
    <div class="side" id="s4"><h1>B<h1></div>
    <div class="side" id="s5"><h1>A</h1></div>
    <div class="side" id="s6"><h1>C</h1></div>
    <div class="side" id="s7"><h1>K</h1></div>

    <div class="feedback" id="t0"><h1>F</h1></div>
    <div class="feedback" id="t1"><h1>E</h1></div>
    <div class="feedback" id="t2"><h1>E</h1></div>
    <div class="feedback" id="t3"><h1>D</h1></div>
    <div class="feedback" id="t4"><h1>B<h1></div>
    <div class="feedback" id="t5"><h1>A</h1></div>
    <div class="feedback" id="t6"><h1>C</h1></div>
    <div class="feedback" id="t7"><h1>K</h1></div>
    <div id="form-div">
        <form class="form" id="form1"  action="<?php echo base_url();?>index.php/feedback" method="post">
            <input name="Username" type="text" class=" feedback-input"  pattern="[a-zA-Z\s]+{5,}" value="<?php echo set_value('Username');?>" placeholder="Name" title="Characters only" id="name" required/>
            <input name="Email" type="email" class=" feedback-input"  value="<?php echo set_value('Email');?>" id="email" title="Email" placeholder="Email" required/>
            <textarea name="Comment" type="text" class="feedback-input"  value="<?php echo set_value('Comment');?>" id="comment" placeholder="Comment" required></textarea>
            <input type="submit" value="SEND" id="button-blue"/>
       </form>
  </div>
</body>
</html>
         


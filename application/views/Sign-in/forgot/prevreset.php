<!-- success.php
        This is page that is loaded after a feedback is successfully recorded. S        ass is used for css and it is in 
        application/views/feedback/stylesheets/screen.sass and changes
        are made in screen.css
-->
<html>
<head>
    <link href="<?php echo base_url();?>application/views/feedback/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
</head>
<body>
    <video  class="video-triangle" autoplay="true" loop width="100%" video="100%" style="width:100%, height:100%">
    <source src="<?php echo base_url();?>application/views/Home/Animation/video.ogv">
    <source src="<?php echo base_url();?>application/views/Home/Animation/video.mp4">
    </video>

    <div class="form-div">
        <form   action="#" method="post">

            <input type="password" class="name" name="Password" onchange="form.Passconf.pattern = this.value;" placeholder="New Password"  pattern="[a-zA-Z0-9]{8,}" title="Minimum 8 letters or numbers." required /><br>
            <input type="password" class="name" name="Passconf" placeholder="Confirm New Password" pattern="[a-zA-Z0-9]{8,}" title="Re-type Password" required /><br><br>

            <div class="submit">
                <input type="submit" value="OKAY" class="button-blue"/>
            </div>
        </form>
    </div>

</body>
</html>
         


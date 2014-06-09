<html>
<head>
    <title>Feedback Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>application/views/Feedback/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css">    
</head>
<body>

<div class="background">    
    <div class="container">
        <div class="header">
            <h1 class="h_1">Any Suggestion or Feedback &nbsp;</h1>
            <h2 class="h_2">Feel free and share with us</h2>
        </div>     
    
        <div class="body">   
            <form class="form">
                <ul class="ul">
                    <!-- First name left side -->
                    <li>
                        <p class="side_left">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" placeholder="First Name" />
                        </p>
                    <!-- Last name on right side -->
                    </li>
                    <li>
                        <p class="side_right">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" placeholder="Last Name" />      
                        </p>
                    </li>
                    <!-- Email -->
                    <li>
                        <p class="email">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" placeholder="abc@gmail.com" />
                        </p>
                    </li>

                    <!-- Confirm Email -->
                    <li>
                        <p class="confirmEmail">
                            <label for="email">Confirm E-mail</label>
                            <input type="email" name="email" placeholder="abc@gmail.com" />
                        </p>
                    </li>     

                    <!-- Seperator -->
                    <li>
                        <div class="Seperator">
                        </div>
                    </li>   
                    <!-- Comment box -->
                        <li>
                            <label for="comments">Comments</label>
                            <textarea cols="46" rows="3" name="comments"></textarea>
                        </li>
                    <!-- Submit button -->
                        <li>
                            <input class="btn btn-submit" type="submit" value="Submit" />
                        </li>
                    </li>
                </ul><!-- ul over -->
            </form><!-- Form over -->
        </div>
</div>        
</div>
</body>
</html>
<div id="header">
  	<div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="logo" title="logo" class="logo_image" /></a>
  	<h1><a href="index.php">SS Fitness &amp;Gym</a></h1>
  	</div>
    
    <div class="menu">
        <ul id="main_menu">
        	<li class="selected"><a href="#">Home</a>
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="../index.htm">Shashi Shanti Home</a></li>
            </ul>
            </li>
            <li><a href="#">About Us</a>
            <ul>
                	<li><a href="about.php">Gym</a></li>
                    <li><a href="aboutf.php">About Founders</a></li>
            	</ul>
            	</li>
            <li><a href="#">The Club</a>
              	<ul>
                	<li><a href="services.php">services</a></li>
                    <li><a href="program.php">Program</a></li>
                    <li><a href="trainers.php">Trainers</a></li>
            	</ul>
            </li>
            <li><a href="#">Photo Gallery</a>
            	<ul>
                    <li><a href="gallery.php?i=1">Inauguration</a></li>
                    <li><a href="gallery.php?i=2">Virtual Tour</a></li>
                    <li><a href="gallery.php?i=3">Inception</a></li>
                    <li><a href="video_g.php">Video Gallery</a></li>
            	</ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <?php
				$test = $_SESSION['username'];
				$name = $_SESSION['name'];
				$temp = strlen ( $test );
				if($temp != 0)
				{
				?>
                <li><a href="contact.php">Hi <?php echo $name; ?></a>
                    <ul>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="progress.php">Progress Chart</a></li>
                        <li><a href="exc.php">Exercise</a></li>
                        <li><a href="profile.php">Profile</a></li>
                         <li><a href="fee_detail.php">Fee Detail</a></li>
                        <li><a href="change_pass.php">Change Password</a></li>
                    </ul>
                </li> 
            <?php
				}				
			else
			{
			?>
            	<li><a href="login.php">Login</a></li>
            <?php
			}
			?>
        </ul>
     </div>
     
  </div>
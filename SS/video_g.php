<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SS Fitness</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Sortable -->
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
</head>
<body>
<div id="main_container">
  <?php include"header.php"; ?><!-- End of Header-->
  
  <div class="page_header pagebg2">
      <h1>Club Photo Gallery</h1>
      <?php if($temp != 0)
				{
				?>
               <a href="contact.php" class="header_bt">Hi <?php echo $name; ?></a>                     
            <?php
				}				
			else
			{
			?>
            	<a href="register.php" class="header_bt">Join Now!</a>
            <?php
			}
			?>

   </div>
    
   <div class="content">

   
   		<div class="left_full">
        <h2>Check out the Video</h2>
        </div>
        
        	

     	 <ul class="portfolio_items"> 
            
            <li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="vedio_img/Chest.jpg" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=eln2Ov7B3UQ" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>Complete Chest & Tricep Workout for Gaining Size</h3>
                        
                        </div>
                </div>
        	</li>
            <li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="vedio_img/Pump_Chest.jpg" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=tsO7L7CCONU" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>How to Do a Pec Pump Chest Workout | Gym Workout</h3>
                        
                        </div>
                </div>
        	</li>
            <li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="vedio_img/Back Workout.jpg" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=NaU8mlULPmY" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>How to Do a Back Workout | Gym Workout</h3>
                       
                        </div>
                </div>
        	</li>
            <li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]"><img src="vedio_img/Biceps.jpg" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=LhRQiKOO8P4" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>How to Do a Biceps Workout | Gym Workout</h3>
                        
                        </div>
                </div>
        	</li>
            <li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]"><img src="vedio_img/biceps1.jpg" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=F_clJTFCWZU" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>Biceps Workout - 3 Bicep Exercises for Mass</h3>
                        </div>
                </div>
        	</li>
        	<li class="left13 video" data-id="id-3">
                <div class="gallery_item">
                    <a href="images/lightbox.jpg" rel="prettyPhoto[gallery]"><img src="http://i1.ytimg.com/vi_webp/tc2hbwB91oo/mqdefault.webp" alt="" title="" border="0" /></a>
                    <span><a href="http://www.youtube.com/watch?v=tc2hbwB91oo" rel="prettyPhoto[gallery]" title="Video"><img src="images/video.png" alt="" title="" /></a></span>
                        <div class="gallery_caption">
                        <h3>CHEST & BICEPS CIRCUIT TRAINING with Evan Shy</h3>
                        </div>
                </div>
        	</li>
        
        </ul>	
     
    <div class="clear"></div>     
    </div>
  
   
   
   <?php include"footer.php"; ?>
   
   <div class="clear"></div>
</div>

<script type="text/javascript">
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>

</html>
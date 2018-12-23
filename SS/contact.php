<?php 
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Created by hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SS Fitness</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Twitter Feed -->
<script src="js/twitter/jquery.tweet.js" charset="utf-8"></script>
<!-- Flickr Feed -->
<script src="js/jflickrfeed.min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
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
	$('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '31408169@N04'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
	

  });
  
  jQuery(function($){
	$(".tweet").tweet({
	  modpath: 'js/twitter/',
	  join_text: "auto",
	  username: "famousthemes",
	  count: 2,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
  });
</script>
</head>
<body>
<div id="main_container">
 
  <?php include"header.php"; ?><!-- End of Header-->
  
  <div class="page_header pagebg1">
      <h1>Join Our Fitness Club</h1>
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

   
   		<div class="left23 left_content">
        <h2>Gym Location</h2>
                <div class="gmap">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14395.281262097362!2d83.5447883807941!3d25.577644154042794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991ff1aa07e2911%3A0x8e5af762bfd3795a!2sSS+Ftness+and+Gym!5e0!3m2!1sen!2s!4v1404551066203" width="600" height="450" frameborder="0" style="border:0"></iframe>
                </div>

                <div class="form_content">
                
                <h2>Leave a message</h2>  
                
                    <form id="form1" method="post" action="mail1.php">
                    <div class="form_top">
                        <div class="form_row_half">
                        <input type="text" class="form_input" name="name" placeholder="Your Name"/>
                        </div>
                        <div class="form_row_half">
                        <input type="text" class="form_input" name="email" placeholder="Your Email"/>
                        </div>
                        <div class="form_row">
                        <textarea class="form_textarea" name="msg" placeholder="Your message goes here..."></textarea>
                        </div>
                    </div>
                    <div class="form_bottom">
                        <input type="submit" class="form_submit" value="Submit" />
                    </div>           
                    </form>
                </div>
        </div>
        
   		<div class="left13 sidebar">
        
        
                <h2>Contact us</h2>
                <div class="page_services">
                <table>
                	<tr>
                    	<td class="sport_icon"><img src="images/icon_contact.png" alt="sport_icon_running" title="" /></td>
                        <td valign="top">
                       		<p>Email</p>
    						<p>shashishantidental@gmail.com,<br>
        chaubey.rajkumar@gmail.com <br /></p>
                        </td>
                    </tr>
                    <tr>
                    	<td class="sport_icon"><img src="images/icon_phone.png" alt="sport_icon_bodybuilding" title="" /></td>
                        <td>
                       		<h4>Moblie</h4>
    						<p>+91-9838241551  <br /> +91-9415241551</p>
                        </td>
                    </tr>
                    <tr>
                    	<td class="sport_icon"><img src="images/icon_shop.png" alt="sport_icon_boxing" title="" /></td>
                        <td>
                       		<h4>Our Address</h4>
    						<p>Asthbuji Colony, Bari Bagh, Ghazipur-233001 (UP)</p>
                        </td>
                    </tr>
                </table>
</div>
            

        </div>
        
        <div class="left_full">
	        <h2>Bodybuilding Supplements</h2>
	        
	        <?php include"marque.php" ?>
	        <br/><br/>
	        
	         <h2>Bodybuilding Accessories</h2>
	        
	        <?php include"marque1.php" ?>
        </div>
     
     
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

<!-- Created by hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
</html>
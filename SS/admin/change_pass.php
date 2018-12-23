<?php 
session_start(); 
$test = $_SESSION['username'];
$temp = strlen ( $test );
if($temp != 0)
{

}
else
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="FamousThemes" />
<meta name="description" content="Get in the spotlight" />
<meta name="keywords" content="premium css templates, premium wordpress themes, famous themes, themeforest" />
<title>Power Gym | Responsive Fitness Club Template</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
      <a href="register.php" class="header_bt">Join Now!</a>
   </div>
    
   <div class="content">

   
   		<div class="left23 left_content">
                <div class="form_content">
                
                <h2>Change Your Password</h2>  
                
                    <form id="form1" method="post" action="login_db.php">
                    <div class="form_top">
                        <div class="form_row" style="padding:15px;">
                        <input type="text" class="form_input" name="user_name" placeholder="Old Password"/>
                        <input type="hidden" name="user_name"/>
                        </div>
                        <div class="form_row" style="padding:15px;">
                        <input type="password" class="form_input" name="password" placeholder="New Password"/>
                        </div>                        
                        <div class="form_row" style="padding:15px;">
                        <input type="password" class="form_input" name="password" placeholder="Re-Type Password"/>
                        </div>
                        <?php
							$i = $_GET['i'];
							if($i == 1)
							{
						?>
                        	<div class="form_row" style="padding:15px;">
                            	<font color="#FF0000">Wrong Username or Password..</font>
                            </div>
                        <?php
							}
						?>
                    </div>
                    <div class="form_bottom" style="text-align:left;">
                        <input type="submit" class="form_submit" style="float:left; margin-left:22px;" value="Click to Login" />
                    </div>           
                    </form>
                </div>
        </div>
        
   		<div class="left13 sidebar">
        
        
                <h2>Contact us</h2>
                <div class="page_services">
                <table>
                	<tr>                    	
                        <td valign="top">
                       		<p>Email</p>
    						<p>ssfitnessgym@gmail.com <br /> info@shashishanti.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       		<h4>Moblie</h4>
    						<p>+91-9838241551  <br /> +91-7376829161</p>
                        </td>
                    </tr>
                    <tr>
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
        <div class="supplements_tab">
        <a href="page.php"><img src="images/supplements01.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements02.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements03.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements04.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements02.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements01.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements03.png" alt="" title="" /></a>
        <a href="page.php"><img src="images/supplements04.png" alt="" title="" /></a>
        </div>
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

<!-- Mirrored from hwebs.in, Fri, 13 Dec 2014 11:54:26 GMT -->
</html>

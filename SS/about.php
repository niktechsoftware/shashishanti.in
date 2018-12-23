<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Created by Hwebs Technologies on Fri, 13 Dec 2013 06:37:50 IST -->
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
      <h1>About Us</h1>
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
<style type="text/css">
.tb{}
.tb table tr td{
	border:1px #F03 solid;
	text-align:center;
	font-weight:bold;
}
.tb table tr th{
	padding:10px;
	height:10px;
	background:#F03;
	color:#FFF;
	font-size:13px;
	font-weight:bold;
	border:1px #FFF solid;
}
.tb table tr th h2{
	color:#FFF;
}
</style>
   
   		<div class="left_full tb" style="width:800px; margin-left:auto; margin-right:auto;">
        	<h2>About <strong>SS Fitness and Gym</strong></h2>
	<p>At <strong>SS Fitness and Gym</strong>, our mission is to provide you with the ultimate fitness experience, one that focuses on your specific fitness needs, helps you achieve the results you are after and invigorates your soul. We guarantee the highest quality equipment and training programs available, an expert staff, special amenities that are often not found in other health clubs, attentive service and truly sophisticated surroundings. Our every Fitness training center is committed to being a unique Fitness training center in Ghazipur.</p>
	
	<p>We believe in being different. Not merely for the sake of being dissimilar, but different by being the best in the fitness industry. We set out with one simple and honest goal in mind; to be sensitive to our member’s needs and fitness requirements. Our ideology is to provide our members with the best fitness technologies and services that no others can provide. We listen, we are sensitive to your needs, and most importantly, we thus know what you, as a gym-goer, want.</p>
	<img src="prettyphoto/123.jpg" width="690" />
	
	<p>Welcome to <strong>SS Fitness and Gym</strong>, the latest and modern fitness clubs in Ghazipur.</p> 
	
	<p><strong>SS Fitness and Gym</strong> is a fitness club brand that specializes on the prestigious market segment of business professionals and the working professionals. With our dedication in bringing you the latest fitness technologies, <strong>SS Fitness and Gym</strong> is equipped with many hi-tech equipment and state-of-the art fitness gadgets. Our professional personal trainers and trained helpers dedication will ensure that you receive the appropriate fitness program, customized to your fitness and health needs. Our members enjoy our private yet classy environment and this will ensure that you exercise in utmost privacy and luxury. At <strong>SS Fitness and Gym</strong>, we proudly fuse fitness with fineness; because here, fitness is a privilege.</p>
	
	<p><strong>SS Fitness and Gym</strong> is the brainchild of our founders Dr.Rajkumar Chaubey who believe that healthy lifestyle lead to better quality of life. The main idea is to have our members enjoy their fitness trainings in classy and private settings. As such, it is not surprising that <strong>SS Fitness and Gym</strong> is passionately led by a team of highly qualified and experienced fitness instructors and health professionals. Our team's passion is to serve our members with sheer dedication, warm friendliness and joyful helpfulness.</p>
	
	<p>At <strong>SS Fitness and Gym</strong>, our primary goal is to create awareness and easy access to keep your body, mind and spirit, at peak performance. Our vision is to maintain a fitness centre catering for our member’s physical wellbeing, thereby improving, building and maintaining a stronger and fitter body condition complimented by a health foods bar to nourish your body's daily fibre and vitamins requirements.</p>
	
	<p>If you are looking for unwaivered personal attention during your training regime, then <strong>SS Fitness and Gym</strong> is the place you will want to be.</p>
         
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

<!-- Created by Hwebs Technologies on Fri, 13 Dec 2013 06:37:50 IST -->
</html>
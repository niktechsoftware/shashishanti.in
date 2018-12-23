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
        	<h2>Our <strong>Founding Members</strong></h2>
	<p><img src="face4.png" style="float:left; padding-right:20px; padding-bottom:20px;" /><h1>Dr. Rajkumar Choubey</h1><strong><p>Dr. Rajkumar Choubey</strong>has been a fitness enthusiast since his teen age. He had always felt a lack of proper fitness and gym facility in Ghazipur. The gym he used to at his time were not equipped with proper tool and facility. After completing his graduation in Dental Surgery from Maharashtra he came back to Ghazipur and He started first of its kind dental and Oral Care Center equipped with the all modern amenities. Because of his commitment to his patients he could not think to starting gym. However  time took turn and his younger, who is fitness enthusiasm himself, discussed the matter with him. . He was committed to bring a unique Fitness training center in Ghazipur. So he did.</p>
	<p> "At the end of the day, the most overwhelming key to a child's success is the positive involvement of parents." is what Dr. Rajkumar Choubey believe in. He gives whole credit of his success to his perents <strong>Shri Rambachan Choubey</strong> and <strong> Shrimati Shashikala Choubey</strong>. There is two more personalities who should be given special mention. <strong>Shrimati Shanti Choubey</strong> and <strong>Shri Shrikant Choubey</strong> ,Uncle and Aunty of Dr. Rajkumar Choubey, have been constant source of inspiration for him. </p>
	
	
	<p><img src="face1.png" style="float:left; padding-right:20px; padding-bottom:20px;" /><h1>Mrs. Jyotsna Choubey</h1> <p><strong><p>Mrs. Jyotsna Choubey</strong>is a dietician affiliated from U.P. Bodybuilding & Physique Federation. As far as academic qualification is concerned, she is masters in Art and she has done B.Ed. as well. Mrs. Jyotsna Choubey is one of those people who strive to make sure that the women are getting the same place in indian society as men. She is a versatile advocate of women right. As a philanthropist, she thinks that healthy and fit women community is must in order to take our society and nation forward. She joined shoulders with her husband Dr. Rajkumar Choubey in his mission to provide better fitness club and gym to the community to Ghazipur. She made sure that this institution has equal place for women and decided to take the management in her own hands. She encourages women to participate in such activities so that they care bear the responsibility bestowed on them by society. She is a source of inspiration for many women and young girls.</p>
	
	
	<p><img src="face3.png" style="float:left; padding-right:20px; padding-bottom:20px;" /><h1>Dr. Chandrabhaan Choubey</h1><p><strong>Dr. Chandrabhaan Choubey</strong> has been true follower of his elder brother in every aspect of his life. Like his brother, he has been a fitness freek from chieldhood and was a reguler gym goer. He completed his BDS from Wardha University, Maharastra. However fitness and bodybuiding has been his first love and he has done well in these areas. He begged first prize in Wardha University Bodybuiding Compation. He has been active member of World Bodybuilding and Physique Federation and Asian Bodybuiding and Physique Ferderation. When it came to train people for <strong>SS fitness and Gym</strong>, who could be better choice then Dr. Chandrabhaan Choubey. </p>
	
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
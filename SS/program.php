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
      <h1>Our Package &amp; Program</h1>
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
   
   		<div class="left_full tb">
        	<center><h1>National Certified Trainers &amp; Dieticians</h1></center>
            <center><h4>Free Counsultation with doctor every last month Saturday</h4></center>
        <br />
        <h2>Our Package</h2>
        <table width="80%">
        	<tr>
            	<th><h2>Package</h2></th> <th><h2 style="line-height:0px;">SILVER</h2>3 Month Fee</th> <th><h2 style="line-height:0px;">GOLD</h2>6 Month Fee</th> <th><h2 style="line-height:0px;">DIAMOND</h2>12 Month Fee</th>
            </tr>
            <tr>
            	<th><h2>Strength Workout</h2></th> <td><h2>-</h2></td> <td><h2>-</h2></td> <td><h2>-</h2></td>
            </tr>
            <tr>
            	<th><h2>Cardio Section</h2></th> <td><h2>-</h2></td> <td><h2>-</h2></td> <td><h2>-</h2></td>
            </tr>
            <tr>
            	<th><h2>Strength + Cardio</h2></th> <td><h2>-</h2></td> <td><h2>-</h2></td> <td><h2>-</h2></td>
            </tr>
            <tr>
            	<th><h2>Aerobics </h2></th> <td><h2>-</h2></td> <td><h2>-</h2></td> <td><h2>-</h2></td>
            </tr>
        </table>
        <br />
         <center><h2 style="font-weight:bold; color:#F03;">Fully Air Condition</h2></center>
         
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

<!-- Mirrored from famousthemes.com/power-gym-html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 13 Dec 2013 06:37:50 GMT -->
</html>
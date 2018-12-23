<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SS Fitness</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="./jquery.min.js"></script>
<!-- Twitter Feed -->
<script type="text/javascript" src="js/twitter/jquery.tweet.js" charset="utf-8"></script>
<!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>
<!-- Responsive Carousel -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "slide"
    });
	
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
  
  <div class="slider_container">
		<div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <p>FULLY AIR CONDITIONED...</p>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <p>National Certified Trainers &amp; Dieticians...</p>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <p>A separate facility for women … </p>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <p>LIFE TIME REGISTRATION FEE @ Rs. 200/-</p>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
   
    <!-- Elastislide Carousel -->
    <div id="carousel" class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                <div class="sport_icon"><a href="services.php?p=2"><img src="images/sport_icon_running.png" alt="sport_icon_running" title="" /></a></div>
                <h2><a href="services.php?p=2">Running</a></h2>
                <p><a href="services.php?p=2">Cardio is one of the most important things you can do for your body.</a></p>
                </li>     
                <li>
                <div class="sport_icon"><a href="services.php?p=1"><img src="images/sport_icon_bodybuilding.png" alt="sport_icon_bodybuilding" title="" /></a></div>
                <h2><a href="services.php?p=1">Bodybuilding</a></h2>
                <p><a href="services.php?p=1">Bodybuilding is the use of progressive exercise to control and develop musculature.</a></p>
                </li> 
                <li>
                <div class="sport_icon"><a href="services.php?p=6"><img src="images/sport_icon_stretching.png" alt="sport_icon_stretching" title="" /></a></div>
                <h2><a href="services.php?p=6">Stretching</a></h2>
                <p><a href="services.php?p=6">Stretching is a form of physical exercise in which a specific muscle is deliberately flexed.</a></p>
                </li> 
                <li>
                <div class="sport_icon"><a href="services.php?p=14"><img src="images/sport_icon_boxing.png" alt="sport_icon_boxing" title="" /></a></div>
                <h2><a href="services.php?p=14">Boxing</a></h2>
                <p><a href="services.php?p=14">Boxing fitness will have the skills include training with punching mitts.</a></p>
                </li> 
                <li>
                <div class="sport_icon"><a href="services.php?p=3"><img src="images/sport_icon_dancing.png" alt="sport_icon_dancing" title="" /></a></div>
                <h2><a href="services.php?p=3">Aerobics</a></h2>
                <p><a href="services.php?p=3">Aerobics is a form of physical exercise that combines rhythmic aerobic exercise.</a></p>
                </li>                
            </ul>
        </div>
    </div>
    <!-- End Elastislide Carousel -->
    
   <div class="content">

   
   		<div class="left13">
        <h2>Fitness Club</h2>
        <img src="images/image_13.jpg" alt="" title="" class="border_img" />
        <h5 class="subtitle">Winning means you're willing to go longer, work harder, and give more than anyone else.</h5>
        <p>
At SS Fitness and Gym, our mission is to provide you with the ultimate fitness experience, one that focuses on your specific fitness needs, helps you achieve the results you are after and invigorates your soul. We guarantee the highest quality equipment and training programs available, an expert staff, special amenities that are often not found in other health clubs, attentive service and truly sophisticated surroundings.
        </p>
        </div>
        
   		<div class="left13">
<?php 
	$weight = $_POST['weight'];
	$qt = $_POST['qt'];
	$feet = $_POST['feet'];
	$inch = $_POST['inch'];
	if( (strlen($weight) > 0) && (strlen($feet) > 0) && (strlen($inch) > 0))
	{
		if($qt == 'kg')
		{
			$weight = $weight * 2.20462;
		}
		$converted_height = ($feet * 12) + $inch;
		$BMI = $weight * 703 / ($converted_height * $converted_height);
	}
?>
        <h2>BMI Calculator</h2>
            <form method="post" >
        <fieldset style="border:1px #F03 solid; padding:30px; border-radius:15px;">
        	<legend style="font-size:18px; font-family: 'Terminal Dosis', sans-serif; color:#F03">BMI Claculator</legend>
        	<table>  
            	<tr>          	
                	<td>Weight</td>
                    <td><input type="text" name="weight" size="5" required/></td>
                    <td>
                    	<select name="qt" >
                        	<option value="pound">Pound</option>
                            <option value="kg">Kg.</option>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td>Height</td>
                    <td>Feet<input type="text" name="feet" size="5" required/></td>
                    <td>
                    	Inch<input type="text" name="inch" size="5" required/>
                    </td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td><input type="submit" value="Calculate" /></td>
                    <td colspan="2">
						<?PHP
/*
077.Underweight = <18.5
078.Normal weight = 18.5-24.9
079.Overweight = 25-29.9
080.Obesity = BMI of 30 or greater
081.*/
				if($BMI > 0 )
				{
						if ($BMI <= 18.5) {
							echo $BMI;
						echo "<font color='#FF0000'>You are underweight.</font>";
						}
						elseif (($BMI > 18.5) && ($BMI <= 24.9))
						{
						echo "<font color='#00FF00'>You are at your normal weight.</font>";
						}
						elseif ($BMI > 24.9 && $BMI <= 29.9)
						{
						echo "<font color='#FF0000'>You are overweight.</font>";
						}
						elseif ($BMI > 29.9 && $BMI <= 39.9)
						{
						echo "<font color='#FF0000'>You are obese.</font>";
						}
						else
						{
						echo "<font color='#FF0000'>You are morbidly obese.</font>";
						}
				}
?>
                    </td>
            	</tr>
                 <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                 <tr>
                	<td colspan="3">
						<?php 
							if($BMI > 0 )
								{ echo "Your BMI :";}  
							echo $BMI; 
						?>
                    </td>
            	</tr>
            </table>
         </fieldset>
         </form>
            
            <fieldset style="border:1px #F03 solid; padding:30px; border-radius:15px;">
        	<legend style="font-size:18px; font-family: 'Terminal Dosis', sans-serif; color:#F03">BMI Chart</legend>
        	<table width="100%">  
            	<tr>          	
                	<td>Result</td>
                    <td></td>
                    <td>BMI</td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td>Underweight</td>
                    <td>= < </td>
                    <td>18.5</td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td>Normal weight</td>
                    <td>=</td>
                    <td>18.5-24.9</td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td>Overweight</td>
                    <td>=</td>
                    <td>25-29.9</td>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;</td>
            	</tr>
                <tr>
                	<td>Obesity</td>
                    <td>=</td>
                    <td>BMI of 30 or greater</td>
                </tr>
            </table>
         </fieldset>
        </div>
        
   		<div class="left13">
        <h2>Calories Burned Calculator</h2>
        <fieldset style="border:1px #F03 solid; padding-top:30px; padding-bottom:40px; padding-left:5px; padding-right:5px; border-radius:15px;">
        	<legend style="font-size:18px; font-family: 'Terminal Dosis', sans-serif; color:#F03">Calories Burned</legend>
        		<?php include"calorie.php"; ?>
        </fieldset>
        <br />
		<h2>Gym Timing</h2>
        <ul class="program_list">
        <li><span class="col1">UNISEX GYM</span><span class="col2"></span></li>
        <li class="even"><span class="col1">05:30 - 09:00 AM</span><span class="col2">05:30 - 09:00 PM</span></li>
        
        <li><span class="col1"></span><span class="col2"></span></li>
      
      
                   
        </ul>
          <div class="form_bottom">
          <a href="http://shashishanti.in/SS/admin/">
                        <input type="submit" class="form_submit" value="Admin Login" />
                        </a>
                    </div> 
        
        
        </div>
         
        <div class="left_full">
        <form method="post" action="trainers.php" >
        <fieldset style="border:1px #F03 solid; padding:30px; border-radius:15px;">
        	<legend style="font-size:18px; font-family: 'Terminal Dosis', sans-serif; color:#F03">Notice Board</legend>
        	<table>  
            	<tr>
                	<td>
                    <marquee direction="up" height="180" scrollamount="2" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
                    <?php 
						include_once"db.php";
						$news = 'select * from notice';
						$result1 = mysql_query($news);
						while($row = mysql_fetch_array($result1))
						{
							?>
                            	<strong><h2><?php echo $row['heading']; ?></h2></strong><br />
                                <p><?php echo $row['dis']; ?></p>
                                <p>&nbsp;</p>
                                <strong style="float:right;"><?php echo $row['post_date']; ?></strong>
                            <?php
						}
					?>
                    </marquee>
                    </td>
                </tr>
            </table>
         </fieldset>
         </form>
        <p>&nbsp;</p>
        <center><h1 style="text-decoration:blink; color:#F03;">LIFE TIME REGISTRATION FEE @ Rs. 200/-</h1></center>
        <br /><br />
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
$('#carousel').elastislide({
	imageW 	: 290,
	margin		: 20
});
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>


</html>
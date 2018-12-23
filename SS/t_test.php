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
         <h2>Certified Professional Trainers</h2>
        <p>
        Our personal trainers are fitness professional involved in exercise prescription and instruction. Our trainers motivate clients by setting goals and providing feedback and accountability to clients. Trainers also measure our client's strengths and weaknesses with fitness assessments. These fitness assessments may also be performed before and after an exercise program to measure our client's improvements in physical fitness. Trainers may also educate their clients in many other aspects of wellness besides exercise, including general health and nutrition guidelines. Our Qualified personal trainers recognize their own areas of expertise.
        </p> 
        </div>
        
        <ul class="portfolio_items"> 
<?php
	include_once"db.php";
	$i = $_GET['i'];
	if($i == 1)
	{
		$img = "select * from gallery where section = 'innog'";
		$res = mysql_query($img);
		while($row = mysql_fetch_array($res))
		{
			?>
            
            <li class="left13 gym" data-id="id-1">
        	<div class="gallery_item">
                <img src="<?php echo "./innog/".$row['image']; ?>" alt="" title="" border="0" />
                <span><a href="<?php echo "./innog/".$row['image']; ?>" rel="prettyPhoto[gallery]" title="<?php echo $row['dis']; ?>"><img src="images/photo.png" alt="" title="" /></a></span>
                    <div class="gallery_caption">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['dis']; ?></p>
                    </div>
            </div>
        </li> 
            
            <?php
		}
	}
	if($i == 2)
	{
		$img = "select * from gallery where section = 'virtual'";
		$res = mysql_query($img);
		while($row = mysql_fetch_array($res))
		{
			?>
            
            <li class="left13 gym" data-id="id-1">
        	<div class="gallery_item">
                <img src="<?php echo "./virtual/".$row['image']; ?>" alt="" title="" border="0" />
                <span><a href="<?php echo "./virtual/".$row['image']; ?>" rel="prettyPhoto[gallery]" title="<?php echo $row['dis']; ?>"><img src="images/photo.png" alt="" title="" /></a></span>
                    <div class="gallery_caption">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['dis']; ?></p>
                    </div>
            </div>
        </li> 
            
            <?php
		}
	}
	if($i == 3)
	{
		$img = "select * from gallery where section = 'recp'";
		$res = mysql_query($img);
		while($row = mysql_fetch_array($res))
		{
			?>
            
            <li class="left13 gym" data-id="id-1">
        	<div class="gallery_item">
                <img src="<?php echo "./recp/".$row['image']; ?>" alt="" title="" border="0" />
                <span><a href="<?php echo "./recp/".$row['image']; ?>" rel="prettyPhoto[gallery]" title="<?php echo $row['dis']; ?>"><img src="images/photo.png" alt="" title="" /></a></span>
                    <div class="gallery_caption">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['dis']; ?></p>
                    </div>
            </div>
        </li>  
            
            <?php
		}
	}
?>
              
        
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

<!-- Mirrored from famousthemes.com/power-gym-html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 13 Dec 2013 06:37:50 GMT -->
</html>

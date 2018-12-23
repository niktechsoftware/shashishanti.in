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
      <h1>Check Your Exercise Chart</h1>
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
.tb table tr th h5{
	color:#FFF;
}
</style>
   
   		<div class="left_full tb">
        <h2>Your Exercise Chart</h2>
        <table width="100%">
        	<tr>
            	<th><h5>Day</h5></th> 
                <th><h5>Body Part</h5></th> 
                <th><h5>Exercise</h5></th> 
                <th><h5>Set 1 - 70 Kg.</h5></th> 
                <th><h5>Reps</h5></th> 
                <th><h5>Set 2 - 79 Kg.</h5></th> 
                <th><h5>Reps</h5></th> 
                <th><h5>Set 3 - 83 Kg.</h5></th> 
                <th><h5>Reps</h5></th> 
                <th><h5>Set 4 - 88 Kg.</h5></th>
                <th><h5>Reps</h5></th> 
            </tr>
<?php 
	include_once"db.php";
	$r = "SELECT * FROM exc where uid='$test' ORDER BY FIELD(day,'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday')";
	$res = mysql_query($r);
	while($row = mysql_fetch_array($res))
	{
	$day = $row['day'];
?>
            <tr>
            	<th><h5><?php echo $day; ?></h5></th> 
                <td><?php echo $row['exc']; ?></td> 
                <td><?php 
					if($day == "Monday")
					{
						echo "Back <br /> Delts";
					}
					if($day == "Tuesday")
					{
						echo "Chest <br /> Delts";
					}
					if($day == "Wednesday")
					{
						echo "Legs  <br /> Calfs";
					}
					if($day == "Thursday")
					{
						echo "Biceps <br /> Triceps";
					}
					if($day == "Friday")
					{
						echo "Chest <br /> Biceps";
					}
					if($day == "Saturday")
					{
						echo "Delts <br /> Taps";
					}
				
				 ?></td>
                <td><?php echo $row['set1']; ?></td> 
                <td><?php echo $row['reps1']; ?></td>   
                <td><?php echo $row['set2']; ?></td> 
                <td><?php echo $row['reps2']; ?></td>
                <td><?php echo $row['set3']; ?></td> 
                <td><?php echo $row['reps3']; ?></td>
                <td><?php echo $row['set4']; ?></td>
                
                <td><?php echo $row['reps4']; ?></td>
            </tr>
<?php } ?>
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

<!-- Mirrored from hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
</html>
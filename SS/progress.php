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
	color:#F03;
	font-size:13px;
	border:1px #F03 solid;
}
</style>
<?php
	$i = 0;
	$month = array();
	$diet = array();
	$fat = array();
	$weight = array();
	include_once"db.php";
	$q = "select * from progress where user_id = '$test'";
	$sql = mysql_query($q);	
	while($row = mysql_fetch_array($sql))
	{
		$month[$i] = $row['month'];
		$diet[$i] = $row['diet'];
		$fat[$i] = $row['fat'];
		$weight[$i] = $row['weight'];
	$i++;	
	}
	
?>
   
   		<div class="left_full tb">
            <h1>Hi <?php echo $name; ?>   </h1>
            <h3>Here is your Progress Chart</h3>

            <table width="70%" align="center">
            	<tr>
                	<th>Period</th><th>1 Month</th><th>2 Month</th><th>3 Month</th>
                </tr>
                <tr>
                	<th>Diet</th><td><?php echo $diet[0]; ?></td><td><?php echo $diet[1]; ?></td><td><?php echo $diet[2]; ?></td>
                </tr>
                <tr>
                	<th>Fat</th><td><?php echo $fat[0]; ?></td><td><?php echo $fat[1]; ?></td><td><?php echo $fat[2]; ?></td>
                </tr>
                <tr>
                	<th>Weight</th><td><?php echo $weight[0]; ?></td><td><?php echo $weight[1]; ?></td><td><?php echo $weight[2]; ?></td>
                </tr>
          	</table>
            <br /><br />
            <table width="70%" align="center">
            	<tr>
                	<th>Period</th><th>4 Month</th><th>5 Month</th><th>6 Month</th>
                </tr>
                <tr>
                	<th>Diet</th><td><?php echo $diet[3]; ?></td><td><?php echo $diet[4]; ?></td><td><?php echo $diet[5]; ?></td>
                </tr>
                <tr>
                	<th>Fat</th><td><?php echo $fat[3]; ?></td><td><?php echo $fat[4]; ?></td><td><?php echo $fat[5]; ?></td>
                </tr>
                <tr>
                	<th>Weight</th><td><?php echo $weight[3]; ?></td><td><?php echo $weight[4]; ?></td><td><?php echo $weight[5]; ?></td>
                </tr>
          	</table>
            <br /><br />
            <table width="70%" align="center">
            	<tr>
                	<th>Period</th><th>7 Month</th><th>8 Month</th><th>9 Month</th>
                </tr>
                <tr>
                	<th>Diet</th><td><?php echo $diet[6]; ?></td><td><?php echo $diet[7]; ?></td><td><?php echo $diet[8]; ?></td>
                </tr>
                <tr>
                	<th>Fat</th><td><?php echo $fat[6]; ?></td><td><?php echo $fat[7]; ?></td><td><?php echo $fat[8]; ?></td>
                </tr>
                <tr>
                	<th>Weight</th><td><?php echo $weight[6]; ?></td><td><?php echo $weight[7]; ?></td><td><?php echo $weight[8]; ?></td>
                </tr>
          	</table>
            <br /><br />
            <table width="70%" align="center">
            	<tr>
                	<th>Period</th><th>10 Month</th><th>11 Month</th><th>12 Month</th>
                </tr>
                <tr>
                	<th>Diet</th><td><?php echo $diet[9]; ?></td><td><?php echo $diet[10]; ?></td><td><?php echo $diet[11]; ?></td>
                </tr>
                <tr>
                	<th>Fat</th><td><?php echo $fat[9]; ?></td><td><?php echo $fat[10]; ?></td><td><?php echo $fat[11]; ?></td>
                </tr>
                <tr>
                	<th>Weight</th><td><?php echo $weight[9]; ?></td><td><?php echo $weight[10]; ?></td><td><?php echo $weight[11]; ?></td>
                </tr>
          	</table>
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

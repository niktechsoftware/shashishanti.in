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
	$q = "select * from register where user_id = '$test'";
	$sql = mysql_query($q);	
	while($row = mysql_fetch_array($sql))
	{		
	$i++;	
	}
	
?>
   
   		<div class="left_full tb">
            <h1>Hi <?php echo $name; ?>   </h1>
            <h3>Here is your Profile Detail</h3>
			<?php
            $detail = "select * from fee where user_id = '$test'";
			$result = mysql_query($detail);
			while($row = mysql_fetch_array($result))
			{
				?>
                	<table width="100%">
                    	<tr>
                        	<td style="border:none;" width="47%">
                            	<table width="100%">
                                	<tr>
                                    	<th><label>Membership Charge</label></th>
                                        <td><label><?php echo $row['m_fee']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Supplements Name</label></th>
                                        <td><label><?php echo $row['s_name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Supplements Fee</label></th>
                                        <td><label><?php echo $row['s_fee']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Accessories Name</label></th>
                                        <td><label><?php echo $row['a_name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Accessories Fee</label></th>
                                        <td><label><?php echo $row['a_fee']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>SS Membership Charge</label></th>
                                        <td><label><?php echo $row['ss_member_charge']; ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                            <td style="border:none;">
                            &nbsp;
                            </td>
                            <td style="border:none;" width="47%">
                            	<table width="100%">
                                	
                                    <tr>
                                    	<th><label>Total Amount You Paid</label></th>
                                        <td><label><?php echo $row['t_p']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Remaining Membership Fee</label></th>
                                        <td><label><?php echo $row['r_m_p']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<th><label>Payment Date</label></th>
                                        <td><label><?php echo $row['pay_date']; ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                        </tr>
                       
                    </table>
                    <br />
                <?php
			}
			?>
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
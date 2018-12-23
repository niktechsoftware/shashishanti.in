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

   
   		<div class="left23 left_content">
                <div class="form_content">
                	<form id="form1" method="post" action="register_db.php">
                	<h2>Registration Information</h2>
                        <div class="form_top">
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="name" placeholder="Full Name"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="f_name" placeholder="Fathers Name"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="dob" placeholder="Date Of Birth"/>
                            </div>
                            <div class="form_row_half">
                            <select name="gender" class="form_input" style="width:290px; height:35px; border-radius:5px; border-color:#CCC; background:#e7e7e7;">
                            	<option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            </div>
                            <div class="form_row">
                            <input type="text" class="form_input" name="address" placeholder="Address"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="mob" placeholder="Contact Number"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="e_mob" placeholder="Emergency Contact Number"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="occupation" placeholder="Occupation"/>
                            </div>
                            <div class="form_row_half">
                            <input type="text" class="form_input" name="email" placeholder="Email-Id"/>
                            </div>
                            
                            
                            
                            <div class="form_row" style="padding-top:20px;">
                            <p style="font-size:24px; font-weight:bold;">Heart Problem</p>
                            <p>Please Read the following question carfully and answer each honestly, deleating as appropriate or adding information, if necessary, responses are confidencial have you ever han any history of the following. </p>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td><p>Heart Problem</p></td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n1" value="Heart Problem" /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td><p>Pain in Chest</p></td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n2" value="Pain in Chest"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td><p>Low blood pressure</p></td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n3" value="Low blood pressure"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td><p>Height blood pressure</p></td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n4" value="Height blood pressure"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td><p>Any breathing difficulties</p></td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n5" value="Any breathing difficulties"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Diabetes</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n6" value="Diabetes"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Fainting spells</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n7" value="Fainting spells"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Joint Problem</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n8" value="Joint Problem"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Back Complains</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n9" value="Back Complains"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Epilepsy</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n10" value="Epilepsy"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Pregnancy</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n11" value="Pregnancy"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="70%">
                                	<tr>
                                    	<td>Other significant illness/operation</td>
                                        <td align="right">Y/N &nbsp;&nbsp;&nbsp;<input type="checkbox" name="n12" value="Other significant illness/operation"  /></td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="100%">
                                	<tr>
                                    	<td>
                                        	If you have answered yes to any of the above you must consult your doctor prior to exerrcise.<br /><br />
                                        	Please bring the related documents at the time of joine.
                                        </td>
                                   	</tr>
                               	</table>
                            </div>
                            <div class="form_row">
                            	<table width="100%">
                                	<tr>
                                    	<td>&nbsp;
                                        	
                                        </td>
                                   	</tr>
                               	</table>
                            </div>
                        </div>
                        <div class="form_bottom">
                        <input type="submit" class="form_submit" style="float:left; margin-left:250px;" value="Click for Register" />
                    </div>            
                    </form>
                </div>
        </div>
        
   		<div class="left13 sidebar">
        	<br /><br /><br /><br /><br /><br /><br />
        
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

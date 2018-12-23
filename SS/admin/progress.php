<?php 
/*
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
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>Hwebs Admin</title>
</head>

<body>

<div class="main_page">
	<div class="page_header">
    	<center><h1>Shashi Shanti Fitness Care Center Admin Panel</h1></center>
    </div>
    
    <div class="page_menu">
    	<?php include"menu.php"; ?>
    </div>
    
    <div class="page_body">
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Progress Chart Entry 
        <hr />
        
     
		<?php	
			include_once"./db.php";
			$uid = $_POST['uid'];
			$month = $_POST['month'];
			$diet = $_POST['diet'];
			$fat = $_POST['fat'];
			$wt = $_POST['wt'];
		       echo $uid.'""'.$month.'""'.$diet.'""'.$fat.'""'.$wt;
			if((strlen($uid) > 0) && (strlen($month) > 0) && (strlen($fat) > 0))
			{
			$check = "select * from progress where uid = 'uid' and month = '$month'";
			$r = $mysql_query($check);
			$no = $mysql_num_rows($r);
			 
			if($no > 0)
			{
				echo 'This entry allready exist. Try Another.';
			}
			else
			{
				$entry = "insert into progress (user_id,month,diet,fat,weight) values('$uid','$month','$diet','$fat','$wt')";
				if (!mysql_query($sql))
				  {
				  die('Error: ' . mysql_error());
				  }	
				 else
				 {
					 echo 'Record inserted Successfully.';
				 }
			}
			}
			$detail = "select * from register";
			$result = mysql_query($detail);	
			
		?>
        <form method="post">
        <table align="center">
        	<tr>
            	<td style="background:none; text-align:left;"><label>User Id</label></td>
                <td style="background:none;">
                	<select class="text1" style="height:35px; width:220px; padding-top:3px;" name="uid">
                    <option value="">--Select One--</option>
                    <?php
					while($row = mysql_fetch_array($result))
					{
					?>
                    
                    	<option value='<?php echo $row['user_id']; ?>'><?php echo $row['user_id']; ?></option>
					<?php
                    }
					?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Month</label></td>
                <td style="background:none;">
                	<select class="text1" name="month" style="height:35px; width:220px; padding-top:3px;">
                    <option value="">--Select One--</option>
                    <?php
					for($i = 0 ; $i <= 12 ; $i++)
					{
					?>
                    
                    	<option value='<?php echo $i; ?> Month'><?php echo $i; ?> Month</option>
					<?php
                    }
					?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Diet</label></td>
                <td style="background:none;"><input type="text" class="text1" name="diet" /></td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Fat</label></td>
                <td style="background:none;"><input type="text" class="text1" name="fat" /></td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Weight</label></td>
                <td style="background:none;"><input type="text" class="text1" name="wt" /></td>
            </tr>            
            <tr>
                <td style="background:none;" align="center" colspan="2"><input type="submit" value="Submit Detail" class="btn" /></td>
            </tr>
        </table>
        </form>
       
    </div>
    
    <div class="page_footer">
    	<?php include"footer.php"; ?>
    </div>
</div>

</body>
</html>
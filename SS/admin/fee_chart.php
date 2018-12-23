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
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Fee Detail
        <hr />
        <?php
			include_once"db.php";
			$detail = "select * from register where conferm = 'Yes'";
			$result = mysql_query($detail);	
			$i = $_GET['i'];
			if($i == 1)
			{
			echo '<font color="green">Record Inserted</font>';
			}
		?>
        <form method="post" action="fee_chart_db.php">
        <table>
        	<tr>            	
            	<td style="background:none; text-align:left;"><label>Select User Id</label></td>
                <td style="background:none;">
                	<select name="user_id" required>
                    <option value="">--Select One--</option><?php while($row = mysql_fetch_array($result)) {?>
                    <option value='<?php echo $row['user_id']; ?>'><?php echo $row['user_id']; ?></option><?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <hr />
        <table width="50%">
            <tr>
            	<td>Membership Charge</td> 
            	<td><input type="text" name="m_fee" size="4" /></td>
            </tr> 
            <tr>
            	<td>Supplements Name</td> 
            	<td><input type="text" name="s_name" /></td>
            </tr>
            <tr>
            	<td>Supplements Fee</td> 
            	<td><input type="text" name="s_fee" size="4"/></td>
            </tr>
            <tr>
            	<td>Accessories Name</td> 
            	<td><input type="text" name="a_name" /></td>
            </tr>
            <tr>
            	<td>Accessories Fee</td> 
            	<td><input type="text" name="a_fee" size="4"/></td>
            </tr>
            <tr>
            	<td>SS Membership Charge</td> 
            	<td><input type="text" name="ss_member_charge" size="4"/></td>
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
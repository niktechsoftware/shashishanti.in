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
<style type="text/css">
.page_body table tr td{
	
	text-align:center;
	background:#6A9BFF;
	}
</style>
</head>

<body>

<div class="main_page">
	<div class="page_header">
    	<center><h2>Shashi Shanti Dental and Oral Care Center & SS Fitness and Gym Admin Panel</h2></center>
    </div>
    
    <div class="page_menu">
    	<?php include"menu.php"; ?>
    </div>
    
    <div class="page_body">
    	<table width="100%">
        	<tr>
            	<th class="first"><label>User ID</label></th>
                <th><label>Mem Charge</label></th>
                <th><label>Sup Name</label></th>
                <th><label>Sup Fee</label></th>
                <th><label>Acc Name</label></th>
                
                <th><label>Acc Fee</label></th>
                <th><label>SS Membership Charge</label></th>
                <th class="last"><label>Total</label></th>
                <th class="last"><label>Date</label></th>
            </tr>
<?php
	include_once"db.php";
	$uid = $_GET['uid'];
	$detail = "select * from fee WHERE user_id='$uid'";
	$result = mysql_query($detail);
	$no = mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
?>
            <tr>
            	<td><label><?php echo $row['user_id']; ?></label></td>
                 <td><label><?php echo $row['m_fee']; ?></label></td>
                 <td><label><?php echo $row['s_name']; ?></label></td>
                <td><label><?php echo $row['s_fee']; ?></label></td>
                  <td><label><?php echo $row['a_name']; ?></label></td>
                <td><label><?php echo $row['a_fee']; ?></label></td>
                <td><label><?php echo $row['ss_member_charge']; ?></label></td>
                 <td><label><?php echo $row['t_p']; ?></label></td>
                  
                 
                    <td><label><?php echo $row['pay_date']; ?></label></td>
               
               
            </tr>
<?php
	}
?>
         </table>
        
    </div>
    
    <div class="page_footer">
    	<?php include"footer.php"; ?>
    </div>
</div>

</body>
</html>
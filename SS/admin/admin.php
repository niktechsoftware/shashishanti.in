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
            	<th class="first"><label>Member Name</label></th>
                <th><label>User ID</label></th>
                <th><label>Password</label></th>
                <th><label>Address</label></th>
                <th><label>Mobile No</label></th>
                
                <th><label>Status</label></th>
                <th><label>Full Detail</label></th>
                <th class="last"><label>Delete User</label></th>
            </tr>
<?php
	include_once"db.php";
	$detail = "select * from register";
	$result = mysql_query($detail);
	$no = mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
?>
            <tr>
            	<td><label><?php echo $row['name']; ?></label></td>
                <td><label><?php if(strlen($row['user_id']) > 0){echo $row['user_id'];}else{ echo 'Not Assigned';} ?></label></td>
                 <td><label><?php echo $row['password']; ?></label></td>
                <td><label><?php echo $row['address']; ?></label></td>
                <td><label><?php echo $row['mobile']; ?></label></td>
               
                <td>
                	<label>
						<?php 
							if(strlen($row['conferm']) > 0)
								{
									echo 'Confirmed';
								}
							else{
								?>
                                	<a href='conferm_user.php?sno=<?php echo $row['sno']; ?>&id=<?php echo $row['email']; ?>'>Not Confirmed</a>
                                <?php 
								} 
						?>
                    </label>
                </td>
                <td><label><a href='feeDetail.php?uid=<?php echo $row['user_id']; ?>'>Detail</a></label></td>
                <td><label><a href='delete.php?uid=<?php echo $row['user_id']; ?>'><?php echo $row['user_id']; ?></a></label></td>
            </tr>
<?php
	}
?>
         </table>
         <?php 
		 $tno = $no - 1;
		 $tno1 = 300 - ($tno * 25);
		 if($no < 15){ ?>
         <table height="<?php echo $tno1; ?>">
         	<tr>
            	<td style="background:none;">&nbsp;</td>
            </tr>
         </table>
         <?php } ?>
    </div>
    
    <div class="page_footer">
    	<?php include"footer.php"; ?>
    </div>
</div>

</body>
</html>
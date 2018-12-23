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
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Detail
        <hr />
        <?php
		include_once"db.php";
			$sno = $_GET['sno'];
			$uid = $_POST['uid'];
			$name = $_POST['name'];
			$mobile = $_POST['mobile'];
			if((strlen($sno) <= 0) && (strlen($name) <= 0) && (strlen($uid) <= 0) && (strlen($mobile) <= 0))
			{
		?>
        <form method="post" >
        <table align="center">
        	<tr>
            	<td style="background:none; text-align:left;"><label>User Id</label></td>
                <td style="background:none;"><input type="text" class="text1" name="uid" /></td>
                <td style="background:none;">Or</td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Member Name</label></td>
                <td style="background:none;"><input type="text" class="text1" name="name" /></td>
                <td style="background:none;">Or</td>
            </tr>
            <tr>
            	<td style="background:none; text-align:left;"><label>Mobile</label></td>
                <td style="background:none;"><input type="text" class="text1" name="mobile" /></td>
            </tr>
            <tr>
                <td style="background:none;" align="center" colspan="2"><input type="submit" value="Search" class="btn" /></td>
            </tr>
            <tr>
                <td style="background:none; color:#F00;" align="center" colspan="3">Please fill Only one text field for search otherwise no result will found.</td>
            </tr>
        </table>
        </form>
        <?php
			}
		if(strlen($sno) > 0)
		{
			
			$detail = "select * from register where sno = '$sno'";
			$result = mysql_query($detail);
			while($row = mysql_fetch_array($result))
			{
				?>
                	<table width="100%">
                    <tr>
                        	<td><h2> Member Personal Detail</h2></td>
                       	</tr>
                    	<tr>
                        	<td>
                            	<table style="border:1px #006 solid;" width="100%">
                                	<tr>
                                    	<td><label>Full Name</label></td>
                                        <td><label><?php echo $row['name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Fathers Name</label></td>
                                        <td><label><?php echo $row['f_name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Gender</label></td>
                                        <td><label><?php echo $row['gender']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Date of Birth</label></td>
                                        <td><label><?php echo $row['dob']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Occupation</label></td>
                                        <td><label><?php echo $row['occupation']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Address</label></td>
                                        <td><label><?php echo $row['address']; ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                            <td>
                            	<table style="border:1px #006 solid;" width="100%">
                                	
                                    <tr>
                                    	<td><label>Contact Number</label></td>
                                        <td><label><?php echo $row['mobile']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Emergency Contact Number</label></td>
                                        <td><label><?php echo $row['e_mobile']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Email-Id</label></td>
                                        <td><label><?php echo $row['email']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>User ID</label></td>
                                        <td><label><?php echo $row['user_id']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Password</label></td>
                                        <td><label><?php echo $row['password']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Conferm Status</label></td>
                                        <td><label><?php if(strlen($row['conferm']) > 0){ echo $row['conferm'];}else {echo 'No';} ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                        </tr>
                        <tr>
                        	<td><h2> Member Health Detail</h2></td>
                       	</tr>
                       	<?php 
							if(strlen($row['n1']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n1']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n1 ----------------------------------------------
							if(strlen($row['n2']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n2']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n2 ----------------------------------------------
							if(strlen($row['n3']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n3']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n3 ----------------------------------------------
							if(strlen($row['n4']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n4']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n4 ----------------------------------------------
							if(strlen($row['n5']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n5']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n5 ----------------------------------------------
							if(strlen($row['n6']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n6']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n6 ----------------------------------------------
							if(strlen($row['n7']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n7']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n7 ----------------------------------------------
							if(strlen($row['n8']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n8']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n8 ----------------------------------------------
							if(strlen($row['n9']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n9']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n9 ----------------------------------------------
							if(strlen($row['n10']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n10']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n10 ----------------------------------------------
							if(strlen($row['n11']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n11']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n11 ----------------------------------------------
							if(strlen($row['n12']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n12']; ?></td>
                        </tr>
                                <?php
							}
						?>
                    </table>
                    <br />
                <?php
			}
		}
		if((strlen($uid) > 0) && (strlen($name) <= 0) && (strlen($mobile) <= 0))
		{
			$detail = "select * from register where user_id = '$uid'";
			$result = mysql_query($detail);
			while($row = mysql_fetch_array($result))
			{
				?>
                	<table width="100%">
                    <tr>
                        	<td><h2> Member Personal Detail</h2></td>
                       	</tr>
                    	<tr>
                        	<td>
                            	<table style="border:1px #006 solid;" width="100%">
                                	<tr>
                                    	<td><label>Full Name</label></td>
                                        <td><label><?php echo $row['name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Fathers Name</label></td>
                                        <td><label><?php echo $row['f_name']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Gender</label></td>
                                        <td><label><?php echo $row['gender']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Date of Birth</label></td>
                                        <td><label><?php echo $row['dob']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Occupation</label></td>
                                        <td><label><?php echo $row['occupation']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Address</label></td>
                                        <td><label><?php echo $row['address']; ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                            <td>
                            	<table style="border:1px #006 solid;" width="100%">
                                	
                                    <tr>
                                    	<td><label>Contact Number</label></td>
                                        <td><label><?php echo $row['mobile']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Emergency Contact Number</label></td>
                                        <td><label><?php echo $row['e_mobile']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Email-Id</label></td>
                                        <td><label><?php echo $row['email']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>User ID</label></td>
                                        <td><label><?php echo $row['user_id']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Password</label></td>
                                        <td><label><?php echo $row['password']; ?></label></td>
                                   	</tr>
                                    <tr>
                                    	<td><label>Conferm Status</label></td>
                                        <td><label><?php if(strlen($row['conferm']) > 0){ echo $row['conferm'];}else {echo 'No';} ?></label></td>
                                   	</tr>
                               	</table>
                            </td>
                        </tr>
                        <tr>
                        	<td><h2> Member Health Detail</h2></td>
                       	</tr>
                       	<?php 
							if(strlen($row['n1']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n1']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n1 ----------------------------------------------
							if(strlen($row['n2']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n2']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n2 ----------------------------------------------
							if(strlen($row['n3']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n3']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n3 ----------------------------------------------
							if(strlen($row['n4']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n4']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n4 ----------------------------------------------
							if(strlen($row['n5']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n5']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n5 ----------------------------------------------
							if(strlen($row['n6']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n6']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n6 ----------------------------------------------
							if(strlen($row['n7']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n7']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n7 ----------------------------------------------
							if(strlen($row['n8']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n8']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n8 ----------------------------------------------
							if(strlen($row['n9']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n9']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n9 ----------------------------------------------
							if(strlen($row['n10']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n10']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n10 ----------------------------------------------
							if(strlen($row['n11']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n11']; ?></td>
                        </tr>
                                <?php
							}
//---------------------------------------------------------------n11 ----------------------------------------------
							if(strlen($row['n12']) > 0)
							{
								?>
                        <tr>
                        	<td><?php echo $row['n12']; ?></td>
                        </tr>
                                <?php
							}
						?>
                    </table>
                    <br />
                <?php
			}
		}
		if((strlen($uid) <= 0) && (strlen($name) > 0) && (strlen($mobile) <= 0))
		{
			$detail = "select * from register where name = '$name'";
			$result = mysql_query($detail);
			$no = mysql_num_rows($result);
			if($no > 1)
			{
				?>
                <table width="100%">
                    <tr>
                        <th class="first"><label>Member Name</label></th>
                        <th><label>User ID</label></th>
                        <th><label>Address</label></th>
                        <th><label>Mobile No</label></th>
                        <th><label>Email-Id</label></th>
                        <th><label>Status</label></th>
                        <th class="last"><label>Full Detail</label></th>
                    </tr>
                <?php
				while($row = mysql_fetch_array($result))
				{
				?>
                        <tr>
                            <td><label><?php echo $row['name']; ?></label></td>
                            <td><label><?php if(strlen($row['user_id']) > 0){echo $row['user_id'];}else{ echo 'Not Assigned';} ?></label></td>
                            <td><label><?php echo $row['address']; ?></label></td>
                            <td><label><?php echo $row['mobile']; ?></label></td>
                            <td><label><?php echo $row['email']; ?></label></td>
                            <td>
                                <label>
                                    <?php 
                                        if(strlen($row['conferm']) > 0)
                                            {
                                                echo 'Confermed';
                                            }
                                        else{
                                            ?>
                                                <a href='conferm_user.php?sno=<?php echo $row['sno']; ?>&id=<?php echo $row['email']; ?>'>Not Confermed</a>
                                            <?php 
                                            } 
                                    ?>
                                </label>
                            </td>
                            <td><label><a href='detail.php?sno=<?php echo $row['sno']; ?>'>Detail</a></label></td>
                        </tr>
					<?php
                        }
                    ?>
                    </table>
             <?php
			}
			if($no == 1)
			{
				while($row = mysql_fetch_array($result))
				{
					?>
						<table width="100%">
						<tr>
								<td><h2> Member Personal Detail</h2></td>
							</tr>
							<tr>
								<td>
									<table style="border:1px #006 solid;" width="100%">
										<tr>
											<td><label>Full Name</label></td>
											<td><label><?php echo $row['name']; ?></label></td>
										</tr>
										<tr>
											<td><label>Fathers Name</label></td>
											<td><label><?php echo $row['f_name']; ?></label></td>
										</tr>
										<tr>
											<td><label>Gender</label></td>
											<td><label><?php echo $row['gender']; ?></label></td>
										</tr>
										<tr>
											<td><label>Date of Birth</label></td>
											<td><label><?php echo $row['dob']; ?></label></td>
										</tr>
										<tr>
											<td><label>Occupation</label></td>
											<td><label><?php echo $row['occupation']; ?></label></td>
										</tr>
										<tr>
											<td><label>Address</label></td>
											<td><label><?php echo $row['address']; ?></label></td>
										</tr>
									</table>
								</td>
								<td>
									<table style="border:1px #006 solid;" width="100%">
										
										<tr>
											<td><label>Contact Number</label></td>
											<td><label><?php echo $row['mobile']; ?></label></td>
										</tr>
										<tr>
											<td><label>Emergency Contact Number</label></td>
											<td><label><?php echo $row['e_mobile']; ?></label></td>
										</tr>
										<tr>
											<td><label>Email-Id</label></td>
											<td><label><?php echo $row['email']; ?></label></td>
										</tr>
										<tr>
											<td><label>User ID</label></td>
											<td><label><?php echo $row['user_id']; ?></label></td>
										</tr>
										<tr>
											<td><label>Password</label></td>
											<td><label><?php echo $row['password']; ?></label></td>
										</tr>
										<tr>
											<td><label>Conferm Status</label></td>
											<td><label><?php if(strlen($row['conferm']) > 0){ echo $row['conferm'];}else {echo 'No';} ?></label></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td><h2> Member Health Detail</h2></td>
							</tr>
							<?php 
								if(strlen($row['n1']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n1']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n1 ----------------------------------------------
								if(strlen($row['n2']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n2']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n2 ----------------------------------------------
								if(strlen($row['n3']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n3']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n3 ----------------------------------------------
								if(strlen($row['n4']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n4']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n4 ----------------------------------------------
								if(strlen($row['n5']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n5']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n5 ----------------------------------------------
								if(strlen($row['n6']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n6']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n6 ----------------------------------------------
								if(strlen($row['n7']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n7']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n7 ----------------------------------------------
								if(strlen($row['n8']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n8']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n8 ----------------------------------------------
								if(strlen($row['n9']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n9']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n9 ----------------------------------------------
								if(strlen($row['n10']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n10']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n10 ----------------------------------------------
								if(strlen($row['n11']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n11']; ?></td>
							</tr>
									<?php
								}
	//---------------------------------------------------------------n11 ----------------------------------------------
								if(strlen($row['n12']) > 0)
								{
									?>
							<tr>
								<td><?php echo $row['n12']; ?></td>
							</tr>
									<?php
								}
							?>
						</table>
						<br />
					<?php
				}
			}
		}
		
		if((strlen($uid) <= 0) && (strlen($name) <= 0) && (strlen($mobile) > 0))
		{
			$detail = "select * from register where mobile = '$mobile'";
			$result = mysql_query($detail);
			$no = mysql_num_rows($result);
			if($no > 1)
			{
				?>
                <table width="100%">
                    <tr>
                        <th class="first"><label>Member Name</label></th>
                        <th><label>User ID</label></th>
                        <th><label>Address</label></th>
            
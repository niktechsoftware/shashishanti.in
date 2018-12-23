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
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gallery Entry
        <hr />        
        <table>
        	<tr>
            	<td valign="top">
                	<form method="post" action="image_db.php" enctype="multipart/form-data" >
                        <table align="center">
                            <tr>
                                <td style="background:none; text-align:left;"><label>Section</label></td>
                                <td style="background:none;">
                                	<select name="sec" class="text1" style="height:35px; width:220px; padding-top:3px;" >
                                    	<option value="innog">Inauguration</option>
                                        <option value="virtual">Virtual tour</option>
                                        <option value="recp">Reception</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:none; text-align:left;"><label>Image Title</label></td>
                                <td style="background:none;"><input type="text" class="text1" name="title"/></td>
                            </tr>
                            <tr>
                                <td style="background:none; text-align:left;"><label>Photo</label></td>
                                <td style="background:none;"><input type="file" name="image" required /></td>
                            </tr>
                            <tr>
                                <td style="background:none; text-align:left;"><label>Discription</label></td>
                                <td style="background:none;"><textarea class="text1" style="height:120px; padding-top:15px;" name="dis" rows="6" cols="30" ></textarea></td>
                            </tr>            
                            <tr>
                                <td style="background:none;" align="center" colspan="2"><input type="submit" value="Submit" class="btn" /></td>
                            </tr>
                            <tr>
                                <td style="background:none;" align="center" colspan="3">
                                	<?php
										$i = $_GET['i'];
										if($i == 1)
										{
											echo '<font color="green">Record Inserted...</font>';
										}
									?>
                                </td>
                            </tr>
                        </table>
                        </form>
       			</td>
                <td valign="top">
                	<table>
                    	<?php 
							if($i == 2){echo '<tr><td colspan="4"><font color="green">Record Updated...</font></td></tr>';}
							if($i == 3){echo '<tr><td colspan="4"><font color="green">Record Deleted...</font></td></tr>';}
						 ?>
                    	<tr>
                        	<td><label>Section</label></td> 
                            <td><label>Title</label></td> 
                            <td><label>Disctiption</label></td> 
                            <td><label>Edit</label></td> 
                            <td><label>Delete</label></td>
                        </tr>
                        <?php
							include_once"db.php";
							$detail = "select * from gallery";
							$q = mysql_query($detail);
							while($row = mysql_fetch_array($q))
							{
						?>
                        <form action="image_edit.php" method="post">
                        <tr>
                        	<td><?php echo $row['section']; ?>
                            	<select name="sec">
                                    	<option value="innog">Inauguration</option>
                                        <option value="virtual">Virtual tour</option>
                                        <option value="recp">Reception</option>
                                    </select>
                            </td> 
                            <td>
                            	<input type="text" name="title" size="15" value="<?php echo $row['title']; ?>" />
                                <input type="hidden" name="sno" size="15" value="<?php echo $row['sno']; ?>" />
                            </td> 
                            <td><textarea name="dis" rows="5" cols="20"><?php echo $row['dis']; ?></textarea></td> 
                            <td><input type="submit" value="Edit" /></td> 
                            <td><a href="image_delete.php?sno=<?php echo $row['sno']; ?>">Delete</a></td>
                        </tr>
                        </form>
                        <?php	
							}
						?>
                    </table>
             	</td>
            </tr>
        </table>
       
    </div>
    
    <div class="page_footer">
    	<?php include"footer.php"; ?>
    </div>
</div>

</body>
</html>
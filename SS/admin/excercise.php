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
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member Workout Chart Entry
        <hr />
        <?php
			include_once"db.php";
			$m = $_GET['m'];
			$t = $_GET['t'];
			$w = $_GET['w'];
			$th = $_GET['th'];
			$f = $_GET['f'];
			$s = $_GET['s'];
			
			$detail = "select * from register";
			$result = mysql_query($detail);	
		?>
        <form method="post" action="excerise_db.php">
        <table>
        	<tr>            	
            	<td style="background:none; text-align:left;"><label>Select User Id</label></td>
                <td style="background:none;">
                	<select name="uid">
                    <option value="">--Select One--</option><?php while($row = mysql_fetch_array($result)) {?>
                    <option value='<?php echo $row['user_id']; ?>'><?php echo $row['user_id']; ?></option><?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <hr />
        <table width="100%">
        	<tr>
            	<td>Day</td> 
            	<td>Body Part</td> 
                <td>Exercise</td> <td>Set 1</td> 
                <td>Reps</td> <td>Set 2</td> 
                <td>Reps</td> <td>Set 3</td> 
                <td>Reps</td> <td>Set 4</td> 
                <td>Reps</td>
            </tr>
           
            <tr><td colspan="11"><hr /></td></tr>
            <tr>
            	<td>Wednesday</td> 
                <td>
                	Legs<br />Calfs
                </td> 
                <td>
                	<select name="wednesday">
                    	<option value="" selected="selected">-Select One-</option>
                        <option value="Barbell Lung">Barbell Lung</option>
                        <option value="Leg Extention">Leg Extention</option>
                        <option value="Leg Curl">Leg Curl</option>
                        <option value="Squat">Squat</option>
                        <option value="Seated Calf Raises">Seated Calf Raises</option>
                    </select>
                </td> 
                <td><input type="text" size="3" name="w_set1" /></td> <td><input type="text" name="w_reps1" size="3" /></td>
                <td><input type="text" size="3" name="w_set2" /></td> <td><input type="text" name="w_reps2" size="3" /></td>
                <td><input type="text" size="3" name="w_set3"/></td> <td><input type="text" name="w_reps3" size="3" /></td>
                <td><input type="text" size="3" name="w_set4"/></td> <td><input type="text" name="w_reps4" size="3" /></td> 
            </tr>
             <?php 
			if($w == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
            <tr><td colspan="11"><hr /></td></tr>
            <tr>
            	<td>Thursday</td> 
                <td>
                	Biceps<br />Triceps
                </td> 
                <td>
                	<select name="thursday">
	                    <option value="" selected="selected">-Select One-</option>
                    	<option value="EZ Bar Preacher Curl">EZ Bar Preacher Curl</option>
                        <option value="Seated Dual Hammer Curl">Seated Dual Hammer Curl</option>
                        <option value="Standing EZ Bar Curl">Standing EZ Bar Curl</option>
                        <option value="Straight Bar Press Down">Straight Bar Press Down </option>
                    </select>
                </td> 
                 <td><input type="text" size="3" name="th_set1" /></td> <td><input type="text" name="th_reps1" size="3" /></td>
                <td><input type="text" size="3" name="th_set2" /></td> <td><input type="text" name="th_reps2" size="3" /></td>
                <td><input type="text" size="3" name="th_set3"/></td> <td><input type="text" name="th_reps3" size="3" /></td>
                <td><input type="text" size="3" name="th_set4"/></td> <td><input type="text" name="th_reps4" size="3" /></td> 
            </tr>
             <?php 
			if($th == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
            <tr><td colspan="11"><hr /></td></tr>
            <tr>
            	<td>Friday</td> 
                <td>
                	Chest<br />Biceps
                </td> 
                <td>
                	<select name="friday" selected="selected">
                    	<option value="">-Select One-</option>
                        <option value="Bent Over Tri Extentions">Bent Over Tri Extentions</option>
                        <option value="Bench Press">Bench Press</option>
                        <option value="Decline Bench Press">Decline Bench Press</option>
                        <option value="Dumbbell Curls">Dumbbell Curls</option>
                    </select>
                </td> 
                 <td><input type="text" size="3" name="f_set1" /></td> <td><input type="text" name="f_reps1" size="3" /></td>
                <td><input type="text" size="3" name="f_set2" /></td> <td><input type="text" name="f_reps2" size="3" /></td>
                <td><input type="text" size="3" name="f_set3"/></td> <td><input type="text" name="f_reps3" size="3" /></td>
                <td><input type="text" size="3" name="f_set4"/></td> <td><input type="text" name="f_reps4" size="3" /></td> 
            </tr>
             <?php 
			if($f == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
            <tr><td colspan="11"><hr /></td></tr>
            <tr>
            	<td>Saturday</td> 
                <td>
                	Delts<br />
                        Taps
                </td> 
                <td>
                	<select name="saturday">
                    	<option value="" selected="selected">-Select One-</option>
                        <option value="Shoulder Press">Shoulder Press </option>
                        <option value="Upright Rows">Upright Rows</option>
                        <option value="Shrugs">Shrugs</option>
                    </select>
                </td> 
                 <td><input type="text" size="3" name="s_set1" /></td> <td><input type="text" name="s_reps1" size="3" /></td>
                <td><input type="text" size="3" name="s_set2" /></td> <td><input type="text" name="s_reps2" size="3" /></td>
                <td><input type="text" size="3" name="s_set3"/></td> <td><input type="text" name="s_reps3" size="3" /></td>
                <td><input type="text" size="3" name="s_set4"/></td> <td><input type="text" name="s_reps4" size="3" /></td>
            </tr>
             <?php 
			if($s == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
          
            <tr><td colspan="11"><hr /></td></tr>          
            <tr>
            	<td>Sunday</td> 
                <td>
                	Chest<br />Delts
                </td> 
                <td>
                	<select name="tuesday">
                    	<option value="" selected="selected">-Select One-</option>
                        <option value="Bench Press">Bench Press</option>
                        <option value="Incline Barbell Press">Incline Barbell Press</option>
                        <option value="Peck Deck Fly">Peck Deck Fly</option>
                        <option value="Decline Bench Press">Decline Bench Press</option>
                        <option value="Delt Fly">Delt Fly</option>
                    </select>
                </td> 
                <td><input type="text" size="3" name="t_set1" /></td> <td><input type="text" name="t_reps1" size="3" /></td>
                <td><input type="text" size="3" name="t_set2" /></td> <td><input type="text" name="t_reps2" size="3" /></td>
                <td><input type="text" size="3" name="t_set3"/></td> <td><input type="text" name="t_reps3" size="3" /></td>
                <td><input type="text" size="3" name="t_set4"/></td> <td><input type="text" name="t_reps4" size="3" /></td>
            </tr>
             <?php 
			if($t == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
               <tr><td colspan="11"><hr /></td></tr>
        	<tr>
            	<td>Monday</td> 
                <td>
                	Back<br />Delts
                </td> 
                <td>
                	<select name="monday">
                    	<option value="" selected="selected">-Select One-</option>
                        <option value="Behind Head Pull Down">Behind Head Pull Down</option>
                        <option value="Wide Grip Row">Wide Grip Row</option>
                        <option value="V-Grip Pull Down">V-Grip Pull Down</option>
                        <option value="Seated Rows">Seated Rows</option>
                        <option value="Arnold Press">Arnold Press</option>
                    </select>
                </td>
                <td><input type="text" size="3" name="m_set1" /></td> <td><input type="text" name="m_reps1" size="3" /></td>
                <td><input type="text" size="3" name="m_set2" /></td> <td><input type="text" name="m_reps2" size="3" /></td>
                <td><input type="text" size="3" name="m_set3"/></td> <td><input type="text" name="m_reps3" size="3" /></td>
                <td><input type="text" size="3" name="m_set4"/></td> <td><input type="text" name="m_reps4" size="3" /></td> 
            </tr>
            <?php 
			if($m == 1)
			{
			echo '<tr><td colspan="11"><font color="red">This Entry is Updated because its already exist.</font></td></tr>	';
			}
			?>
            <tr><td colspan="11"><hr /></td></tr>          
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
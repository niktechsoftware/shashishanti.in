<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>Hwebs Admin</title>
</head>

<body>
<div class="login_box">
    <div class="header">
    SS Fitness Admin Login	
    </div>
    <div class="login">
    	<form action="login_db.php" method="post">
            <table width="90%" align="center">
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" class="text1" name="user_name" required /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="text1" name="password" required /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" class="btn" value="Login" />  &nbsp;&nbsp;&nbsp; <input type="reset" class="btn" name="Reset" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                    	<?php
							$i = $_GET['i'];
							if($i == 1)
							{
								echo '<center><font color="red">Wrong Username or Password</font></center>';
							}
						?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
		</form>
    </div>
</div>

<div style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-top:110px;">
	Copyright &copy; 2013-2014 Hwebs All Right Reserved.
</div>
</body>
</html>
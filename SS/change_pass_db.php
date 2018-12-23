<?php
	session_start();
	include_once"db.php";
	$user_name = $_POST['user_name'];
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass1 = $_POST['new_pass1'];
	if( $new_pass == $new_pass1)
	{
				$sql = "select * from register where user_id = '$user_name' and password = '$old_pass'";
				$s=mysql_query($sql);
				$n=mysql_num_rows($s);
				if($n>0) {
					
					$chang = "UPDATE register SET password = '$new_pass' where user_id = '$user_name'";
					//echo "succ";
					if (!mysql_query($chang))
					  {
					  die('Error: ' . mysql_error());
					  }
					  else
					  {	
						header("location:change_pass.php?i=3");
					  }
				} 
				else 
				{
					//echo "fail";
					header("location:change_pass.php?i=2");
				}
	}
	else
	{
		header("location:change_pass.php?i=1");
	}	

?>
<?php
			include_once"db.php";
			$t_name = $_POST['heading'];
			$t_post = $_POST['post_date'];
			$dis = $_POST['dis'];
			$sno = $_POST['sno'];
			$ins = "UPDATE notice1 SET heading = '$t_name', post_date = '$t_post', dis = '$dis' where sno = '$sno'";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				header("Location:notice1.php?i=2");
			 }
?>
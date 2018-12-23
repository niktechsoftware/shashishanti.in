<?php
			include_once"db.php";
			$t_name = $_POST['t_name'];
			$t_post = $_POST['t_post'];
			$sno = $_POST['sno'];
			$dis = $_POST['dis'];
			$ins = "UPDATE trainner SET t_name = '$t_name', t_post = '$t_post', dis = '$dis' where sno = '$sno'";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				header("Location:trainner.php?i=2");
			 }
?>
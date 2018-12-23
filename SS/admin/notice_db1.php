<?php
			include_once"db.php";
			$t_name = $_POST['heading'];
			$t_post = $_POST['post_date'];
			$dis = $_POST['dis'];
			$ins = "insert into notice1 (heading, post_date, dis) values('$t_name','$t_post','$dis')";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				header("Location:notice1.php?i=1");
			 }
?>
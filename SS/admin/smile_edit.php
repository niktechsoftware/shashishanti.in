<?php
			include_once"db.php";
			$section = $_POST['sec'];
			$title = $_POST['title'];
			$sno = $_POST['sno'];
			$dis = $_POST['dis'];
			$ins = "UPDATE smile SET cat = '$section', title = '$title', dis = '$dis' where sno = '$sno'";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				header("Location:smile.php?i=2");
			 }
?>
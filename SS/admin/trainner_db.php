<?php
			include_once"db.php";
			$t_name = $_POST['t_name'];
			$t_post = $_POST['t_post'];
			$image = $_FILES['image'];
			$dis = $_POST['dis'];
			$im = $t_name.$_FILES['image']['name'];
			$ins = "insert into trainner (t_name, t_post, image, dis) values('$t_name','$t_post','$im','$dis')";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				move_uploaded_file($_FILES["image"]["tmp_name"],"../t_images/".$t_name . $_FILES["image"]["name"]);
			 	header("Location:trainner.php?i=1");
			 }
?>
<?php
			include_once"db.php";
			$section = $_POST['sec'];
			$title = $_POST['title'];
			$image = $_FILES['image'];
			$dis = $_POST['dis'];
			$im = $t_name.$_FILES['image']['name'];
			$ins = "insert into gallery (section, title, image, dis) values('$section','$title','$im','$dis')";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				move_uploaded_file($_FILES["image"]["tmp_name"],"../".$section."/".$im);
			 	header("Location:gallery.php?i=1");
			 }
?>
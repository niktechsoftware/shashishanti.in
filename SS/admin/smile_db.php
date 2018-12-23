<?php
			include_once"db.php";
			$section = $_POST['sec'];
			$title = $_POST['title'];
			$image = $_FILES['image'];
			$dis = $_POST['dis'];
			$im = $title.$_FILES['image']['name'];
			$ins = "insert into smile (image, title, dis, cat) values('$im','$title','$dis','$section')";
			if (!mysql_query($ins))
			  {
			  die('Error: ' . mysql_error());
			  }	
			 else
			 {
				move_uploaded_file($_FILES["image"]["tmp_name"],"../".$section."/".$im);
			 	header("Location:smile.php?i=1");
			 }
?>
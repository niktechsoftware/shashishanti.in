<?php

	include_once"db.php";
	$uid = $_GET['uid'];
	
	$del = "DELETE FROM register WHERE user_id='$uid'";
	if (!mysql_query($del))
	{
		die('Error: ' . mysql_error());
	}
	header("Location:admin.php");	

?>
<?php
	session_start();
	include_once"db.php";
	$uid = $_POST['user_name'];
	$password = $_POST['password'];
	
	$sql = "select * from login where user_name = '$uid' and password = '$password'";
	$s=mysql_query($sql);
	$n=mysql_num_rows($s);
	if($n>0) {

		$_SESSION['username']=$uname;
		//echo "succ";
		header("location:admin.php");
	} 
	else 
	{
		//echo "fail";
		header("location:index.php?i=1");
	}

?>
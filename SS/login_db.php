<?php
	session_start();
	include_once"db.php";
	$uid = $_POST['user_name'];
	$password = $_POST['password'];
	$sql = "select name from register where user_id = '$uid' and password = '$password'";
	$s=mysql_query($sql);
	$n=mysql_num_rows($s);
	while($row = mysql_fetch_array($s))
	{
		$name = $row['name'];
	}
	if($n>0) {

		$_SESSION['username']=$uid;
		$_SESSION['name']=$name;
		//echo "succ";
		header("location:index.php");
	} 
	else 
	{
		//echo "fail";
		header("location:login.php?i=1");
	}

?>
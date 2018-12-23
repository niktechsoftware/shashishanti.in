<?php

include_once "db.php";
$sno = $_GET['sno'];

$query = mysql_query("delete from smile where sno = '$sno'");

if($query)
{	
header("Location:smile.php?i=3");

}
?>
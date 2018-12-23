<?php

include_once "db.php";
$sno = $_GET['sno'];

$query = mysql_query("delete from notice1 where sno = '$sno'");

if($query)
{	
header("Location:notice1.php?i=3");

}
?>
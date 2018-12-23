<?php

include_once "db.php";
$sno = $_GET['sno'];

$query = mysql_query("delete from notice where sno = '$sno'");

if($query)
{	
header("Location:notice.php?i=3");

}
?>
<?php

include_once "db.php";
$sno = $_GET['sno'];

$query = mysql_query("delete from trainner where sno = '$sno'");

if($query)
{	
header("Location:trainner.php?i=3");

}
?>
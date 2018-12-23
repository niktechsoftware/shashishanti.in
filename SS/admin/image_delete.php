<?php

include_once "db.php";
$sno = $_GET['sno'];

$query = mysql_query("delete from gallery where sno = '$sno'");

if($query)
{	
header("Location:gallery.php?i=3");

}
?>
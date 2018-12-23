<?php
$dbhost='localhost';
$dbuser='gfincuct_ss_fitn';
$dbpass="rahul!123singh";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('gfincuct_ss_fitness') or die ("Error ".mysql_error());
?>
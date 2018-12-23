<?php
$dbhost='localhost';
$dbuser='hwebsdwc_ssfit';
$dbpass="arvind!123bal";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('hwebsdwc_ss_fitness') or die ("Error ".mysql_error());
?>
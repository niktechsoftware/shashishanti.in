<?php
include_once"db.php";
$m_f = $_POST['m_fee'];

$s_f = $_POST['s_fee'];
$a_f = $_POST['a_fee'];

$s_name = $_POST['s_name'];
$a_name = $_POST['a_name'];


$ss_member_charge = $_POST['ss_member_charge'];
$r_m_p = $ss_member_charge - $m_f;

$uid = $_POST['user_id'];
$dt = date('Y-m-d');
$t_p = $m_f + $s_f + $a_f;

$abc = "insert into fee
		(user_id, m_fee, s_fee, a_fee, ss_member_charge, r_m_p, t_p, s_name, a_name, pay_date) 
	values('$uid','$m_f','$s_f','$a_f','$ss_member_charge','$r_m_p','$t_p','$s_name','$a_name','$dt')";
if(! mysql_query($abc))
{
	die("ERROR :" . mysql_error());
}
else{
	header('Location:fee_chart.php?i=1');
}


?>
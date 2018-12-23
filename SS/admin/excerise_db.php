<?php 
include_once"db.php";

$uid = $_POST['uid'];


$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thrusday = $_POST['thursday'];
$friday = $_POST['friday'];
$saterday = $_POST['saturday'];

$m_set1 = $_POST['m_set1'];
$m_set2 = $_POST['m_set2'];
$m_set3 = $_POST['m_set3'];
$m_set4 = $_POST['m_set4'];

$m_reps1 = $_POST['m_reps1'];
$m_reps2 = $_POST['m_reps2'];
$m_reps3 = $_POST['m_reps3'];
$m_reps4 = $_POST['m_reps4'];

//-------------------------------------------------Monday

$t_set1 = $_POST['t_set1'];
$t_set2 = $_POST['t_set2'];
$t_set3 = $_POST['t_set3'];
$t_set4 = $_POST['t_set4'];

$t_reps1 = $_POST['t_reps1'];
$t_reps2 = $_POST['t_reps2'];
$t_reps3 = $_POST['t_reps3'];
$t_reps4 = $_POST['t_reps4'];

//------------------------------------------------Tuesday

$w_set1 = $_POST['w_set1'];
$w_set2 = $_POST['w_set2'];
$w_set3 = $_POST['w_set3'];
$w_set4 = $_POST['w_set4'];

$w_reps1 = $_POST['w_reps1'];
$w_reps2 = $_POST['w_reps2'];
$w_reps3 = $_POST['w_reps3'];
$w_reps4 = $_POST['w_reps4'];

//--------------------------------------------------Wednesday

$th_set1 = $_POST['th_set1'];
$th_set2 = $_POST['th_set2'];
$th_set3 = $_POST['th_set3'];
$th_set4 = $_POST['th_set4'];

$th_reps1 = $_POST['th_reps1'];
$th_reps2 = $_POST['th_reps2'];
$th_reps3 = $_POST['th_reps3'];
$th_reps4 = $_POST['th_reps4'];

//--------------------------------------------------Thursday

$f_set1 = $_POST['f_set1'];
$f_set2 = $_POST['f_set2'];
$f_set3 = $_POST['f_set3'];
$f_set4 = $_POST['f_set4'];

$f_reps1 = $_POST['f_reps1'];
$f_reps2 = $_POST['f_reps2'];
$f_reps3 = $_POST['f_reps3'];
$f_reps4 = $_POST['f_reps4'];

//---------------------------------------------------Friday

$s_set1 = $_POST['s_set1'];
$s_set2 = $_POST['s_set2'];
$s_set3 = $_POST['s_set3'];
$s_set4 = $_POST['s_set4'];

$s_reps1 = $_POST['s_reps1'];
$s_reps2 = $_POST['s_reps2'];
$s_reps3 = $_POST['s_reps3'];
$s_reps4 = $_POST['s_reps4'];
//------------------------------------------------------Saterday

$l1 = "Monday";
$l2 = "Tuesday";
$l3 = "Wednesday";
$l4 = "Thursday";
$l5 = "Friday";
$l6 = "Saturday";

$url = "";

if((strlen($m_set1) > 0) && (strlen($m_reps1) > 0) && (strlen($monday) > 0))
{
$mon = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l1','$monday','$m_set1','$m_set2','$m_set3','$m_set4','$m_reps1','$m_reps2','$m_reps3','$m_reps4')";
	$c1 = "select * from exc where uid='$uid' and day = 'monday' and exc='$monday'";
	$r1 = mysql_query($c1);
	$no = mysql_num_rows($r1); 
	if($no > 0)
	{
		$mon_set = "UPDATE exc SET set1='$m_set1',set2='$m_set2',set3='$m_set3',set4='$m_set4',reps1='$m_reps1', reps2='$m_reps2',reps3='$m_reps3',reps4='$m_reps4' where uid='$uid' and day = 'monday' and exc='$monday'";
		if (!mysql_query($mon_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = "m=1&";
	}
	else
	{
		if (!mysql_query($mon))
			  {
			  die('Error: ' . mysql_error());
			  }	
	}
}

if((strlen($t_set1) > 0) && (strlen($t_reps1) > 0) && (strlen($tuesday) > 0))
{
$tus = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l2','$tuesday','$t_set1','$t_set2','$t_set3','$t_set4','$t_reps1','$t_reps2','$t_reps3','$t_reps4')";
$c2 = "select * from exc where uid='$uid' and day = 'tuesday' and exc='$tuesday'";
	$r2 = mysql_query($c2);
	$no1 = mysql_num_rows($r2); 
	if($no1 > 0)
	{
		$tus_set = "UPDATE exc SET set1='$t_set1',set2='$t_set2',set3='$t_set3',set4='$t_set4',reps1='$t_reps1', reps2='$t_reps2',reps3='$t_reps3',reps4='$t_reps4' where uid='$uid' and day = 'tuesday' and exc='$tuesday'";
		if (!mysql_query($tus_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = $url."t=1&";
	}
	else
	{
		if (!mysql_query($tus))
			  {
			  die('Error: ' . mysql_error());
			  }	
	}
}

if((strlen($w_set1) > 0) && (strlen($w_reps1) > 0) && (strlen($wednesday) > 0))
{
$wed = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l3','$wednesday','$w_set1','$w_set2','$w_set3','$w_set4','$w_reps1','$w_reps2','$w_reps3','$w_reps4')";
$c3 = "select * from exc where uid='$uid' and day = 'wednesday' and exc='$wednesday'";
	$r3 = mysql_query($c3);
	$no2 = mysql_num_rows($r3); 
	if($no2 > 0)
	{
		$wed_set = "UPDATE exc SET set1='$w_set1',set2='$w_set2',set3='$w_set3',set4='$w_set4',reps1='$w_reps1', reps2='$w_reps2',reps3='$w_reps3',reps4='$w_reps4' where uid='$uid' and day = 'wednesday' and exc='$wednesday'";
		if (!mysql_query($wed_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = $url."w=1&";
	}
	else
	{
	if (!mysql_query($wed))
			  {
			  die('Error: ' . mysql_error());
			  }
	}
}

if((strlen($th_set1) > 0) && (strlen($th_reps1) > 0) && (strlen($thrusday) > 0))
{
$thu = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l4','$thrusday','$th_set1','$th_set2','$th_set3','$th_set4','$th_reps1','$th_reps2','$th_reps3','$th_reps4')";
$c4 = "select * from exc where uid='$uid' and day = 'thursday' and exc='$thursday'";
	$r4 = mysql_query($c4);
	$no3 = mysql_num_rows($r4); 
	if($no3 > 0)
	{
		$thu_set = "UPDATE exc SET set1='$th_set1',set2='$th_set2',set3='$th_set3',set4='$th_set4',reps1='$th_reps1', reps2='$th_reps2',reps3='$th_reps3',reps4='$th_reps4' where uid='$uid' and day = 'thursday' and exc='$thursday'";
		if (!mysql_query($thu_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = $url."th=1&";
	}
	else
	{
	if (!mysql_query($thu))
			  {
			  die('Error: ' . mysql_error());
			  }
	}
}

if((strlen($f_set1) > 0) && (strlen($f_reps1) > 0) && (strlen($friday) > 0))
{
$fri = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l5','$friday','$f_set1','$f_set2','$f_set3','$f_set4','$f_reps1','$f_reps2','$f_reps3','$f_reps4')";
$c5 = "select * from exc where uid='$uid' and day = 'thursday' and exc='$thursday'";
	$r5 = mysql_query($c5);
	$n4 = mysql_num_rows($r5); 
	if($no4 > 0)
	{
		$fri_set = "UPDATE exc SET set1='$f_set1',set2='$f_set2',set3='$f_set3',set4='$f_set4',reps1='$f_reps1', reps2='$f_reps2',reps3='$f_reps3',reps4='$f_reps4' where uid='$uid' and day = 'thursday' and exc='$thursday'";
		if (!mysql_query($fri_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = $url."f=1&";
	}
	else
	{
if (!mysql_query($fri))
			  {
			  die('Error: ' . mysql_error());
			  }
	}
}

if((strlen($s_set1) > 0) && (strlen($s_reps1) > 0) && (strlen($saterday) > 0))
{
$sat = "insert into exc(uid,day,exc,set1,set2,set3,set4,reps1,reps2,reps3,reps4) values('$uid','$l6','$saterday','$s_set1','$s_set2','$s_set3','$s_set4','$s_reps1','$s_reps2','$s_reps3','$s_reps4')";
$c6 = "select * from exc where uid='$uid' and day = 'saterday' and exc='$saterday'";
	$r6 = mysql_query($c6);
	$no5 = mysql_num_rows($r6); 
	if($no5 > 0)
	{
		$sat_set = "UPDATE exc SET set1='$s_set1',set2='$s_set2',set3='$s_set3',set4='$s_set4',reps1='$s_reps1', reps2='$s_reps2',reps3='$s_reps3',reps4='$s_reps4' where uid='$uid' and day = 'saterday' and exc='$saterday'";
		if (!mysql_query($sat_set))
			  {
			  die('Error: ' . mysql_error());
			  }
		$url = $url."s=1";
	}
	else
	{
		if (!mysql_query($sat))
			  {
			  die('Error: ' . mysql_error());
			  }
	}
}

header("Location:excercise.php?$url");

?>
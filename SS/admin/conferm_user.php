<?php
/*
session_start(); 
$test = $_SESSION['username'];
$temp = strlen ( $test );
if($temp != 0)
{

}
else
{
header("location:index.php");
}
*/
include_once"db.php";
$sno = $_GET['sno'];
$id = $_GET['id'];

$a = mt_rand(1000000000,9999999999);

$update = "UPDATE register SET user_id = '$id', password='$a', conferm='Yes' where sno = '$sno'";

if (!mysql_query($update))
	  {
	  die('Error: ' . mysql_error());
	  }	
	 else
	 {
		 $to = 'bodybuilding@email.com';
    $from = "info@shashishanti.com";
    $subject = "Register Compleated";
	$subject1 = "SS Fitness User_id and Password";

    //begin of HTML message
    $message = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>You Have confermed a member Registration.</td>
				</tr>
				<tr>
					<td>User Id</td><td>$id</td>
				</tr>
				<tr>
					<td>Password</td><td>$s</td>
				</tr>
			</table>
		</body>
	</html>

EOF;

 $message1 = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Congratulations Your registration is confermed. Your user id and password given bellow..</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td>User Id : </td>
								<td>$id</td>
							</tr>
							<tr>
								<td>Password : </td>
								<td>$a</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Now you can login with this userid and password for more information about your fitness.</td>
				</tr>
				<tr>
					<td>Thanks Regards</td>
				</tr>
				<tr>
					<td>SS Fitness</td>
				</tr>
			</table>
			
		</body>
	</html>

EOF;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);
	 mail($id, $subject1, $message1, $headers);
		 header("Location:admin.php");
	 }

?>
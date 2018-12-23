<?php
include_once"db.php";
	$name = $_POST['name'];
	$f_name = $_POST['f_name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$mob = $_POST['mob'];
	$e_mob = $_POST['e_mob'];
	$occupation = $_POST['occupation'];
	$email = $_POST['email'];
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$n4 = $_POST['n4'];
	$n5 = $_POST['n5'];
	$n6 = $_POST['n6'];
	$n7 = $_POST['n7'];
	$n8 = $_POST['n8'];
	$n9 = $_POST['n9'];
	$n10 = $_POST['n10'];
	$n11 = $_POST['n11'];
	$n12 = $_POST['n12'];
	$sql = "insert into register (name, f_name, dob, gender, address, mobile, e_mobile, occupation, email, n1, n2, n3, n4, n5, n6, n7, n8, n9, n10, n11, n12, user_id, password, conferm) values ('$name','$f_name','$dob','$gender','$address','$mob','$e_mob','$occupation','$email','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','no','','')";
	if (!mysql_query($sql))
	  {
	  die('Error: ' . mysql_error());
	  }	
	 else
	 {
		 $to = 'bodybuilding@email.com';
    $from = "info@shashishanti.com";
    $subject = "Register Confermed";
	$subject1 = "SS Fitness";

    //begin of HTML message
    $message = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Name</td><td>$name</td>
				</tr>
				<tr>
					<td>Email Id</td><td>$email</td>
				</tr>
				<tr>
					<td>Mobile Number</td><td>$mob</td>
				</tr>
				<tr>
					<td>Address</td><td>$address</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>This is Send By $mail Please contact him.</td>
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
					<td>Thank You $name. We will contact you soon</td>
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
	 mail($email, $subject1, $message1, $headers);
		 header("Location:reg_conferm.php?nm=$name&mail1=$email");
	 }
?>
<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$msg = $_POST['msg'];
    $to = 'chaubey.rajkumar@gmail.com';
	$to1 = 'shashishantidental@gmail.com';
    $from = "info@gfinch.in";
    $subject = "New Message from SS Fitness & Gym";
	$subject1 = "Shashi Santi";

    //begin of HTML message
    $message = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Name</td><td>$name</td>
				</tr>
				<tr>
					<td>Email Id</td><td>$mail</td>
				</tr>
				<tr>
					<td>Message</td><td>$msg</td>
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
					<td>SS Fitness & Gym</td>
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
     mail($to1, $subject, $message, $headers);
	 mail($mail, $subject1, $message1, $headers);
	
header("Location:index.php?i=1");
?>
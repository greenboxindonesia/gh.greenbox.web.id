<?php




$email=$_POST['email'];


$to='yourname@mail.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
$subject = 'Subscribe request for Applechic';


$body.='Email: '.$email."\n";

	
if(mail($to, $subject, $body, $headers)) {
	die('Subscription complete.');
} else {
	die('Error: Mail failed');
}

?>
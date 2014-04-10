<?php
$email=$_POST['email'];

$to='aank84@gmail.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
$subject = 'Subscribe request for Greenhouse Project Site';

$body.='Email: '.$email."\n";

if(mail($to, $subject, $body, $headers)) {
	die('Subscription complete.');
} else {
	die('Error: Mail failed');
}
?>

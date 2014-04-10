<?php


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=$_POST['query'];


$to='yourname@mail.com';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = $subject;
$body='You have got a new support request from Applechic.'."\n\n";

$body.='Name: '.$name."\n";
$body.='Email: '.$email."\n";
$body.='Subject: '.$subject."\n";
$body.='Query: '."\n".$query."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('We have recieved your message, we will get back to you soon.');
} else {
	die('Error: Mail failed');
}

?>
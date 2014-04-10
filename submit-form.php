<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='aank84@gmail.com';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = $subject;
$body='You have got a new message from the contact form on your website - gh.greenbox.web.id'."\n\n";

$body.='Name: '.$name."\n";
$body.='Email: '.$email."\n";
$body.='Subject: '.$subject."\n";
$body.='Message: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('Pesan Terkirim.');
} else {
	die('Error: Pesan Gagal/ Tidak terkirim');
}
?>

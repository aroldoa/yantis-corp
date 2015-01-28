<?php
require_once "Mail.php";

$name = trim($_POST['name']);
$cname = trim($_POST['cname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$human = trim($_POST['human']);
$comments = trim($_POST['comments']);

if(($human == '') || (!isset($human))){
 
	$from = $name . " at " . $cname.' <' . $email . '>';
	$to = "Yantis Contact <Info@yantiscompany.com>";
	$subject = "New Inquiry";

	$comments = wordwrap($comments, 80);

	$message = $comments . "\r\n";
	$message .= "Phone: " . $phone . "\r\n";
	 
	$host = "mail.emailsrvr.com";
	$port = '587';
	$username = "contact@primomotif.com";
	$password = "Primo222";
	 
	$headers = array ('From' => $from,
	  'To' => $to,
	  'Subject' => $subject);
	$smtp = Mail::factory('smtp',
	  array ('host' => $host,
	  	'port' => $port,
	    'auth' => true,
	    'username' => $username,
	    'password' => $password));
	 
	$mail = $smtp->send($to, $headers, $message);
	 
	if (PEAR::isError($mail)) {
	  echo("<p>" . $mail->getMessage() . "</p>");
	} else {
	  echo("<p>Message successfully sent!</p>");
	}
}
?>
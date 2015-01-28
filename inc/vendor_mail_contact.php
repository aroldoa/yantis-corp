<?php
require_once "Mail.php";

$name = trim($_POST['name']);
$cname = trim($_POST['cname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$human = trim($_POST['human']);
$capabilities = trim($_POST['capabilities']);
$certification = trim($_POST['certification']);
$about = trim($_POST['about']);

if(($human == '') || (!isset($human))){
 
	$from = $name . " at " . $cname.' <' . $email . '>';
	$to = "Yantis Contact <Info@yantiscompany.com>";
	$subject = "Vendor Query";

	$capabilities = wordwrap($capabilities, 80);
	$certification = wordwrap($certification, 80);
	$about = wordwrap($about, 80);

	$message = "Capabilities: " . "\r\n" . $capabilities . "\r\n" . "\r\n";
	$message .= "Certification: " . "\r\n" . $certification . "\r\n" . "\r\n";
	$message .= "About the company: " . "\r\n" . $about . "\r\n" . "\r\n";
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
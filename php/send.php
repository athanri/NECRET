<?php
	$userName = $_POST['fName'];
	$userEmail = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];

	$from = "dipnortheast@gmail.com";

	$body = "";
	$body .= "From: ".$userName. "\r\n";
	$body .= "Email: ".$userEmail. "\r\n";
	$body .= "Message: ".$message. "\r\n";
	$body .= "Phone: ".$phone. "\r\n";

	$to = "dipnortheast@gmail.com";

	$headers = "From: " .$userEmail. "\r\n" .
    				"MIME-Version: 1.0\r\n" . 
						"Content-Type: text/html; charset=UTF-8";
						
	mail($to, $subject, $body, $headers);
	header("Location: https://www.necret.ie/")
?>
<?php
	$userEmail = $_POST['email'];

	$from = "info@necret.ie";

	$body = "";
	$body .= "Email: ".$userEmail. "\r\n";
	$body .= "Message: Please connect ".$userEmail. " with NECRET \r\n";

	$to = "info@necret.ie";

	$headers = "From: " .$userEmail. "\r\n" .
    				"MIME-Version: 1.0\r\n" . 
						"Content-Type: text/html; charset=UTF-8";
						
	mail($to, $body, $headers);
	header("Location: https://www.necret.ie/")
?>
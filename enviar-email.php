<?php
	
if(!empty($_POST)){
	
	$headers = "From: ".$_POST['nombre']." <" . strip_tags($_POST['email']) . ">\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = $_POST['mensaje'];
	mail('martinpandolfelli@gmail.com', 'ASUNTO', $message, $headers);

}




?>
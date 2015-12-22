<?php
//session_start();
include_once 'dbconnect.php';
$email = $_POST['fp_email'];
$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	//$row=mysql_fetch_array($res);
	$result=mysql_num_rows($res);
	if($result == 0){
		
		echo"Email does not exist";

	}
	else{
			$email = $_POST['fp_email'];
  			$too = $email;
			$subject = "CeeGees";
			$message = "http://araggsiva.net16.net/reset.php?email=".$email;
			$user_email = ""; // valid POST email address
			$headers  = "From: $user_email\r\n";
			$headers .= "Reply-To: $too\r\n";
			$headers .= "Return-Path: $too\r\n";
			$headers .= "X-Mailer: PHP/" . phpversion(). "\r\n";
			$headers .= "MIME-Version: 1.0" . "\n";
			$headers .= "Content-type: text/html; UTF-8". "\r\n";
			if(mail($too,$subject,$message,$headers)) {
				echo '1'; 
			}
	
	}

?>









	
	
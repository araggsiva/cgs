<?php
//session_start();
include_once 'dbconnect.php';


	
	$email = mysql_real_escape_string($_POST['re_email']);
	$upass = mysql_real_escape_string($_POST['re_password']);
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$result=mysql_num_rows($res);

	
	if($result == 0){
		
		
		echo"email does not exist";

	}
	else{
		
		$rest=mysql_query("UPDATE users SET password='$upass' WHERE email='$email'");

		echo"Succesfully password updated";
	}
	

?>









	
	
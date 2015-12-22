<?php
//session_start();
include_once 'dbconnect.php';


	
	$email = ($_POST['re_email']);
	$upass = ($_POST['re_password']);
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$result=mysql_num_rows($res);

	
	if($result == 0){
		
		
		echo"0";

	}
	else{
		
		$rest=mysql_query("UPDATE users SET password='$upass' WHERE email='$email'");

		echo"1";
	}
	

?>









	
	
<?php
//session_start();
include_once 'dbconnect.php';


	$name = mysql_real_escape_string($_POST['reg_fullname']);
	$email = mysql_real_escape_string($_POST['reg_email']);
	$upass = mysql_real_escape_string($_POST['reg_password']);
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$result=mysql_num_rows($res);
	if($result == 0){
		$res=mysql_query("INSERT INTO users(name,email,password) values('$name','$email','$upass')");
		echo"Succesfully Inserted";

	}
	else{
		echo"email already exist";
	}
	

?>









	
	
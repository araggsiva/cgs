<?php
//session_start();
include_once 'dbconnect.php';
//i


	$email = $_POST['lg_username'];
	$upass = $_POST['lg_password'];


	$res=mysql_query("SELECT * FROM users WHERE email='$email'and password='$upass'");
	//$row=mysql_fetch_array($res);
	
	$result=mysql_num_rows($res);
	if($result==0)
	{
		
		//$_SESSION['user'] = $row['user_id'];
		//header("Location: home.php");
		echo 0;

	}
	else
	{
		echo 1;
	}
	

?>

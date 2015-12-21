<?php
//session_start();
include_once 'dbconnect.php';


	
	$email = mysql_real_escape_string($_POST['reg_email']);
	
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	$result=mysql_num_rows($res);
	if($result == 0){
		
		echo"Email does not exist";

	}
	else{
		
  
  //Email information
  $admin_email = $row['email'];
  //$email = $_REQUEST['email'];
  $subject = "Reset your CGS password";
  $comment = $_REQUEST['comment'];//i need to send link here after putting in to server
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  
  
	}
	

?>









	
	
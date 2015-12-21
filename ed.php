<?php
//session_start();
include_once 'dbconnect.php';



	$email = mysql_real_escape_string($_POST['lg_username']);
	$upass = mysql_real_escape_string($_POST['lg_password']);
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	
	if($row['password']==$upass)
	{
		
		//$_SESSION['user'] = $row['user_id'];
		//header("Location: home.php");
		echo"ss";

	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
	

?>
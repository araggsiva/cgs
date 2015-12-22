<!DOCTYPE html>
<html>
<head>


<!-- All the files that are required -->
<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='regis.css' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

<script src="regis.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.login-button').click(function(){
  
event.preventDefault();
      $.ajax({
        url: "ed1.php",
        method : "post",
        data : $('#register-form').serialize(),
        dataType : "html",
        success : function(strMessage){
          if(strMessage==1)
          {
            location.href="index.php";
            //alert(strMessage);
            //header("Location: home.php");
          }
          else{
                  //location.href="list.php?status=0";
                  alert("Please enter valid details");
          }
      //  $('#msg').text(strMessage)
    }
  })
		});

  });
</script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="container">
<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" method="POST" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
				<div class="form-group">
						<label for="reg_fullname" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" >
					</div>
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" >
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" >
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="index.php">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</body>
</html>
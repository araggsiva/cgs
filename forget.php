<!DOCTYPE html>
<html>
<head>


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
        url: "ed2.php",
        method : "post",
        data : $('#login-form-1').serialize(),
        dataType : "html",
        success : function(strMessage){
          if(strMessage)
          {
            //location.href="home.php";
            alert(strMessage);
            //header("Location: home.php");
          }
          else{
                  //location.href="list.php?status=0";
                  alert("n");
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
<!-- FORGOT PASSWORD FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" >
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="login.php">login here</a></p>
				<p>new user? <a href="register.php">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>
</html>
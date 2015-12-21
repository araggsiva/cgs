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
        url: "ed.php",
        method : "post",
        data : $('#login-form').serialize(),
        dataType : "html",
        success : function(strMessage){
          if(strMessage)
          {
            location.href="home.php";
            //alert(strMessage);
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
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="container">
<div class="text-center" style="padding:100px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" method="POST" action="#" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button" id="verify"  name="verify"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="forget.php">click here</a></p>
				<p>new user? <a href="register.php">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="login-container">
		<div class="login">
			<div class="title">Login Form</div>
			<form class="login-form" method="post" action="dashboard.php">
				<input type="text" name="uname" placeholder="Email or Phone">
				<input type="password" name="upassword" placeholder="Password">
				<a href="#">Forget Password?</a>
				<input type="submit" name="loginbtn" value="LOGIN" class="login-btn">
			</form>
			<div class="social-btn">
				<a href="registration.php" class="fb-btn">Registration</a>
			</div>

		</div>
	</div>

</body>
</html>
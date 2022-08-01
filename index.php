<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

	<?php 
		check_login();

		if (isset($_POST['loginbtn'])) {
			$uname = $_POST["uname"];
			$pass = $_POST["upassword"];

			// if (empty($uname)) {
			// 	$err="Empty user name is not allow";
			// }

			$sql = "SELECT * FROM $users WHERE (u_username = '$uname' OR u_phone_no = '$uname' OR u_email = '$uname') AND u_password = '$pass'";

			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
			  $msg = "login Successfull";
			   while($row = $result->fetch_assoc()) {
			    $_SESSION["loginstatus"] = true;
			    $_SESSION["username"] = $row['u_username'];
			    // header( "refresh:2;url=dashboard.php" );
			    header( "location:dashboard.php" );
			  }
			} else {
			  $err = "Wrong Username or Password. Please Try Again";
			}

		}


	?>
	<div class="login-container">
		<div class="login">
			<div class="title">Login Form</div>
			<?php
			if (isset($msg)) {
			 	echo '<div class="success">'.$msg.'</div>';
			 } 
			 ?>

			<?php
			if (isset($err)) {
			 	echo '<div class="error">'.$err.'</div>';
			 } 
			 ?>
			<form class="login-form" method="post" action="">
				<input type="text" name="uname" placeholder="Username / Email / Phone" required>
				<input type="password" name="upassword" placeholder="Password" required>
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
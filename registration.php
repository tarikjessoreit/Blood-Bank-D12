<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="reg-container">
		<div class="reg">
			<div class="title">Registration Form</div>
			<form class="reg-form" action="" method="post">
				<input type="text" name="uname" placeholder="Enter Your Name">
				<input type="text" name="suername" placeholder="Enter Your Username">
				<input type="email" name="uemail" placeholder="Enter Your Email">
				<input type="text" name="uphone_no" placeholder="Enter Your Phone Number">
				<select>
					<option value="">Please Select Blood Group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>
				<input type="text" name="uzilla" placeholder="Enter Your Zilla">
				<input type="text" name="uvillage" placeholder="Enter Your Village">

				<select>
					<option value="">Please Select Division</option>
					<option value="Khulna">Khulna</option>
					<option value="Barisal Division">Barisal Division</option>
					<option value="Chittagong Division">Chittagong Division</option>
					<option value="Dhaka Division">Dhaka Division</option>
					<option value="Mymensingh Division">Mymensingh Division</option>
					<option value="Rajshahi Division">Rajshahi Division</option>
					<option value="Rangpur Division">Rangpur Division</option>
					<option value="Sylhet Division">Sylhet Division</option>
				</select>
				<input type="text" placeholder="Enter Your Name">
				<input type="password" placeholder="Password">
				<a href="#">Forget Password?</a>
				<input type="submit" value="Registration" class="reg-btn">
			</form>
			<div class="social-btn">
				<a href="index.php" class="fb-btn">Back To Login</a>
			</div>

		</div>
	</div>

</body>
</html>
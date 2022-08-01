<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

	<?php 
		//check login users 
		check_login();

		if(isset($_POST['regbtn'])) {

			$u_added_date = date('Y-m-d H:i:s');
			$u_name = $_POST['uname'];
			$u_username = $_POST['username'];
			$u_blood_group = $_POST['ubloodgroup'];;
			$u_village = $_POST['uvillage'];
			$u_thana = "";
			$u_zilla = $_POST['uzilla'];
			$u_division = $_POST['udivision'];
			$u_phone_no = $_POST['uphone_no'];
			$u_email = $_POST['uemail'];
			$u_password = $_POST['upass'];
			$u_profile_url = '';
			$u_status = "active";


			$sql = "INSERT INTO users(u_added_date, u_name, u_username, u_blood_group, u_village, u_thana, u_zilla, u_division, u_phone_no, u_email, u_password, u_profile_url, u_status) VALUES ('$u_added_date','$u_name','$u_username' , '$u_blood_group', '$u_village', '$u_thana', '$u_zilla', '$u_division', '$u_phone_no', '$u_email', '$u_password', '$u_profile_url', '$u_status' )";


			if($conn->query($sql)===true){
				$msg = "Registration Successfull!";
			}else{
				$err = "<b>Registration Faild:</b> ".$conn->error;
			}

		}


	 ?>


	<div class="reg-container">
		<div class="reg">
			<div class="title">Registration Form</div>

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

			

			<form class="reg-form" action="" method="post">
				<input type="text" name="uname" placeholder="Enter Your Name">
				<input type="text" name="username" placeholder="Enter Your Username" required>
				<input type="email" name="uemail" placeholder="Enter Your Email" required>
				<input type="text" name="uphone_no" placeholder="Enter Your Phone Number" required>
				<select name="ubloodgroup"  required>
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

				<select name="udivision">
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
				<input type="password" name="upass" placeholder="Enter your Password"  required>
				<a href="#">Forget Password?</a>
				<input type="submit" name="regbtn" value="Registration" class="reg-btn">
			</form>
			<div class="social-btn">
				<a href="index.php" class="fb-btn">Back To Login</a>
			</div>

		</div>
	</div>

</body>
</html>
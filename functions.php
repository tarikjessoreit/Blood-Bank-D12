<?php 

// check loginuser and redirect
function check_login(){
	if (isset($_SESSION["username"]) && $_SESSION["loginstatus"]==true) {
		header('location:dashboard.php');
	}
}


function last_donate_date($uid){
	global $conn;
	global $donate_date;

	$result = $conn->query("SELECT donation_date FROM $donate_date WHERE user_id = $uid ORDER BY donation_date DESC LIMIT 1");
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			return $row['donation_date'];
  		}
	}else{
		return '-';
	}

}

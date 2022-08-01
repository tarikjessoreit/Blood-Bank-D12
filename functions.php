<?php 

// check loginuser and redirect
function check_login(){
	if (isset($_SESSION["username"]) && $_SESSION["loginstatus"]==true) {
		header('location:dashboard.php');
	}
}
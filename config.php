<?php 
session_start();
date_default_timezone_set("Asia/Dhaka");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";


// table list
$users = 'users';
$donate_date = 'b_donate_date';


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
	die("Connection faild: ".$conn->connect_error);
}


// include fuinctions
include "functions.php";






// $sql ="create DATABASE jataname";


// if ($cdb->query($sql)===true) {
// 	echo "Query successfull";
// }else{
// 	echo "ERROR: ".$conn->error;
// }
<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "finals_comm";
$name = $_SESSION['name'];
$user_id = $_SESSION['user_id'];
$qty = $_SESSION['qty'];
$payment_type = $_SESSION['payment_type'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
$dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

// if($_SERVER["HTTPS"] != "on"){
// 	header("Location: https://".$_SERVER["HTTP_HOST"]."\finals_eccom\confirm-checkout.php");
// 	exit;
// }
?>
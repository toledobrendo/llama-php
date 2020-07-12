<?php
include '../includes/connect.php';
require_once '../service/register-service.php';

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$hpass = hash('sha512', $password);

$sql = "INSERT INTO users (username, password, name, email, contact) VALUES ('$username', '$hpass', '$name', '$email', '$contact')";
if($con->query($sql)==true){
$user_id =  $con->insert_id;
$sql = "INSERT INTO wallet(customer_id) VALUES ($user_id)";
if($con->query($sql)==true){
	$wallet_id =  $con->insert_id;
	$cc_number = 0;
	$cvv_number = 0;
	$expiration = 0;
	$sql = "INSERT INTO wallet_details(wallet_id, number, cvv, expiration) VALUES ($wallet_id, $cc_number, $cvv_number, $expiration)";
	$con->query($sql);
}
}

saveOrder($username, $password, $name, $email, $contact);

header("location: ../login.php");
?>

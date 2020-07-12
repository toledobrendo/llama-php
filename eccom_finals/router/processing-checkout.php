<?php 

	include '../includes/connect.php';

	$_SESSION['qty'] = $_POST['qty'];


	header("location: ../process-checkout.php");
 ?>
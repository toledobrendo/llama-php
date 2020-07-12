<?php 
	include '../includes/connect.php';

	$_SESSION['payment_type'] = $_POST['payment_type'];
	$address = $_POST['address'];
	$cvv = $_POST['cvv'];
	$expiration = $_POST['expiration'];
	$crNumber = $_POST['number'];
	$user_id = $_SESSION['user_id'];

	if($payment_type=="Cash on Delivery")
	{

	}


	else if($payment_type=="Credit/Debit Card")
	{	
		$result = mysqli_query($con,"SELECT * from users WHERE id = '$user_id';");
		if($row = mysqli_fetch_array($result)){
			$user_id = $row['id'];
			$result1 = mysqli_query($con,"SELECT * from wallet WHERE customer_id = '$user_id';");

			if($row1 = mysqli_fetch_array($result1)){
			$wallet_id = $row1['id'];
			$sql = "UPDATE wallet_details SET cvv = '$cvv', expiration = '$expiration', number = '$crNumber' WHERE wallet_id = '$wallet_id';";
			$con->query($sql) === TRUE;
			}
		}
	}

	else{
		
	}

	$sql = "UPDATE users SET address = '$address' WHERE id = '$user_id';";
	$con->query($sql) === TRUE;

	header("location: ../confirm-checkout.php");

 ?>
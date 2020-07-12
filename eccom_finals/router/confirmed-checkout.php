<?php 

include '../includes/connect.php';

$payment_type = $_SESSION['payment_type'];
$item_id = $_SESSION['item_id'];
$user_id = $_SESSION['user_id'];

$result = mysqli_query($con,"SELECT * from items WHERE id = '$item_id';");
while($row = mysqli_fetch_array($result)){
	$name = $row['name'];
	$price = $row['price'];
	$img = $row['img'];
	$qty = $_SESSION['qty'];
	$total = $price * $qty;
	$sql = "INSERT INTO orders (user_id,item_id,payment_type,qty,total) VALUES ('$user_id','$item_id','$payment_type','$qty','$total')";
	$con->query($sql);
	}        
	
header("location:../success-page.php");


?>
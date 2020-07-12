<?php

include 'includes/connect.php';
include 'view-comp/header.php';

if ($_SERVER["HTTPS"] != "on") {
    header("Location: https://".$_SERVER["localhost"].$_SERVER["/llama-php/llama-php/eccom_finals/confirm-checkout.php"]);
    exit;
  }

$payment_type = $_SESSION['payment_type'];
$item_id = $_SESSION['item_id'];
$user_id = $_SESSION['user_id'];
 ?>

 <?php
	if($_SESSION['customer_sid']==session_id())
	{
?>

<title>Confirm Checkout</title>
<?php

$result = mysqli_query($con,"SELECT * from items WHERE id = '$item_id';");
while($row = mysqli_fetch_array($result)){
	$name = $row['name'];
	$price = $row['price'];
	$img = $row['img'];
	$qty = $_SESSION['qty'];
	$total = $price * $qty;
	$result = mysqli_query($con,"SELECT * from users WHERE id = '$user_id';");
		if($row = mysqli_fetch_array($result)){
			$address = $row['address'];

	echo '
		<div>'.$name.'</div>
		<div><img src='.$img.' width=100px height=100px></div>
		<div>Price: '.$price.'</div>
		<div>Qty: '.$qty.'</div>
		<div>Total: '.$total.'</div>
		<div>Address: '.$address.'</div>
		<div>Payment: '.$payment_type.'</div>
		<div>
		<a href="router/confirmed-checkout.php">Confirm</a>
		<a href="process-checkout.php">Back</a>
		</div>
	';
	}

}




?>
</body>
</html>

<?php

	}
	else
	{

	header("location:browse-products.php");

}

?>

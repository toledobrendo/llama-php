<?php  

include 'includes/connect.php';
include 'view-comp/header.php';
echo $_SESSION['qty'];
?>

<?php
	if($_SESSION['customer_sid']==session_id())
	{
?> 

<title>Student Page</title>
<div class="w3-main" style="margin-left:300px">

	<h3>Provide Order Details to complete the transaction</h3><br>
	<form method="POST" action="process-checkout.php">
		<div class="content-details">
			<label for="payment_type"><b>Payment Type</b></label>
			<br><br>
			<select id="payment_type" name="payment_type" style="width: 50%" required>
				<option value="Cash on Delivery" selected>Cash on Delivery</option>
				<option value="Credit/Debit Card">Credit/Debit Card</option>
			</select>
			<button type="submit" name="submit">Choose Payment</button>
		</div>

		</form>

		<form method="POST" action="router/confirming-checkout.php">
		<div>
			<?php

				@$payment_type=$_POST['payment_type'];
				echo '<input type = "hidden" name = "payment_type" value ="'.$payment_type.'">';

				echo $payment_type;
				if(isset($_POST['payment_type'])){
					if($_POST['payment_type']=="Cash on Delivery"){
						
    				}
    				else if($_POST['payment_type']=="Credit/Debit Card"){
						echo '<div>
   								<div>Credit card Number: <input type="number" name="number"  size="19" value=""/></div>
   								<div>Expiration Date: <input type="text" name="expiration"  min="0" value=""/></div>
   								<div>CVV: <input type="number" name="cvv"  size = "3" value=""/></div>
   							</div>';
    				}
					else{
						echo "Wow";
					}
					}

					echo '<div>Please input address to be used: <input type="text" name="address" required value=""/></div>';
					echo '<div>';
    					echo '<button type="submit" name="submit">Submit</button>';
    					
    				echo '</div>';



			?>
			</form>
		</div>
		<button class="btn"><a href="browse-products.php">Back</a></button>
		
	
		
</body>
</html>
<?php
	
	}
	else
	{
		 
			header("location:browse-products.php");
		
}

?>
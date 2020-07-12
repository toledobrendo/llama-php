<?php 

include 'includes/connect.php';
include 'view-comp/header.php';

 ?>

 <?php
	if($_SESSION['customer_sid']==session_id())
	{


	echo '
		<div>

		<a href="browse-products.php">Home</a>
		
		</div>
	';
	      
	
?> 
	
<?php
	
	}
	else
	{
		 
	header("location:browse-products.php");
		
}

?>
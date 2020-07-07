<?php
  require_once('view/header.php');
  require_once('service/order-service.php');
?>
	<h1>Order List</h1>

	<?php
		getOrders();
	?>


<?php
  require_once('view/footer.php');
?>

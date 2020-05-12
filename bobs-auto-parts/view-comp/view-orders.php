<?php
require_once('header.php');
require_once('../service/order-service.php');
?>
<h1>Order List</h1>
<?php 
getOrders();
?>
<?php
require_once('footer.php');
?>
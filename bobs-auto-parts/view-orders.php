<?php
  require_once('service/order-service.php');
  require_once('view-comp/header.php');
  echo getOrders();
  require_once('view-comp/footer.php');
?>

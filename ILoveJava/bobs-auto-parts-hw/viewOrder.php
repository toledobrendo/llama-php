<?php
  require_once('service/orderService.php');
  require_once('view/header.php');
  echo getOrders();
  require_once('view/footer.php');
?>

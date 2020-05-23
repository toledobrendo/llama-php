<?php
  require_once('service/orderService.php'); // including service
  require_once('view/header.php');//adding header
  echo getOrders();//sysout of all orders
  require_once('view/footer.php');//adding footer
?>

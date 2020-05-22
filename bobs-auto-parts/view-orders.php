<?php
  require_once('service/order-service.php');
  require_once('view-comp/header.php');
?>

    <title>View Order</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1>Order List</h1>
    <?php
      getOrders();
     ?>
        </div>
        <div class="card-footer">
          <a class="btn btn-info" href="../index.php">Go Back</a>


      <?php
        require_once('view-comp/footer.php');
      ?>

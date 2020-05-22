</head>
<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div href="index.php" class="navbar-brand">Bob's Auto Parts</div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'],'order-form.php')) echo 'active';?>">
          <a class="nav-link" href="order-form.php">Order Form</a>
        </li>
        <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'],'freight-cost.php')) echo 'active';?>">
          <a class="nav-link" href="freight-cost.php">Freight Cost</a>
        </li>
        <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'],'price-list.php')) echo 'active';?>">
          <a class="nav-link" href="price-list.php">Price List</a>
        </li>
        <!-- <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'],'process-order.php')) echo 'active';?>">
          <a class="nav-link" href="process-order.php">Process Order</a>
        </li> -->
      </ul>
    </div>
  </div>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div href="index.php" class="navbar-brand">Bob's Auto Parts</div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'], 'order-form.php')) echo 'active'; ?> ">
            <a class="nav-link" href="order-form.php">Order Form</a>
          </li>
          <li class="nav-item" <?php if(strpos($_SERVER['REQUEST_URI'], 'freight-cost.php')) echo 'active'; ?> ">
            <a class="nav-link" href="freight-cost.php">Freight-cost</a>
          </li>
          <li class="nav-item" <?php if(strpos($_SERVER['REQUEST_URI'], 'price-list.php')) echo 'active'; ?> ">
            <a class="nav-link" href="price-list.php">Price List</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
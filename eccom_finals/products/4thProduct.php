<?php
@include '../includes/connect.php';
$_SESSION['item_id'] = 4;
?>
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
    <div class="container" align = "center">
      <div class="card">
        <div class="card-body">
          <form action="../router/processing-checkout.php" method="POST">
          <div><img src="../images/4thProduct.jpg"></div>
          <input type="hidden" name="image" min="0" value="4thProduct.jpg"/>
          <br>
          <input type="hidden" name="productName" min="0" value="The Seafarer"/>
          <div>The Seafarer</div>
          <br>
          <div>Php 450</div>
          <br>
          <input type="hidden" name="price" value="450"/></td>
          <div>Quantity</div>
          <br>
          <div><input type="number" name="qty" min="1" value="1" style = "width: 10%;"/></div>
          <div><a href="../browse-products.php">Back</a></div>
          <br>
          <div><button type="submit" name="action" class="btn btn-primary">Purchase</button></div>
        </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  </body>
</html>

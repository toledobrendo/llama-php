<?php
@include '../includes/connect.php';
$_SESSION['item_id'] = 1;
$item_id = $_SESSION['item_id'];
echo $item_id;
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
          <div><img src="../images/1stProduct.jpg"></div>
          <input type="hidden" id="image" name="image" min="0" value="1stProduct.jpg"/>
          <br>
          <input type="hidden" id="productName" name="productName" min="0" value="God Eternal-Bontu"/>
          <div>God Eternal-Bontu</div>
          <br>
          <div>Php 250</div>
          <br>
          <input type="hidden" id="price" name="price" value="250"/></td>
          <div>Quantity</div>
          <br>
          <div><input type="number" id= "qty" name="qty" style = "width: 10%;"/></div>
          <div><a href="../browse-products.php">Back</a></div>
          <br>
          <div><button type="submit" id="action" name="action" class="btn btn-primary">Purchase</button></div>
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

<?php 
@include 'includes/connect.php';
@include 'view-comp/header.php';
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
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Browse Products</h3>
        <form action="checkout.php" method="post">
          <table class="table">
            <thead>
              <tr class="row">
                <th class="col-2">Product</th>
                <th class="col-2">Image</th>
                <th class="col-2">Price</th>
                <th class="col-2">Details</th>
              </tr>
            </thead>
            <tbody>

              <tr class="row">
                  <td class="col-2">God Eternal-Bontu</td>
                  <td class="col-2"><img src ="images/1stProduct.jpg" width = "100%">
                  <input type="hidden" name="image" min="0" value="1stProduct.jpg"/></td>
                    <td class="col-2">
                      Php 250
                    <input type="hidden" name="price" min="0" value="250"/></td>
                    <td class="col-2">
                      <a href="products/1stProduct.php" class="btn btn-primary">Details</a>
              </tr>

                <tr class="row">
                    <td class="col-2">Nicol Bolas, The Deceiver</td>
                    <td class="col-2"><img src ="images/2ndProduct.jpg" width = "100%">
                    <input type="hidden" name="image" min="0" value="2ndProduct.jpg"/></td>

                      <td class="col-2">
                        Php 3000
                      <input type="hidden" name="price" min="0" value="3000"/></td>
                      <td class="col-2">
                        <a href="products/2ndProduct.php" class="btn btn-primary">Details</a>
                </tr>

                  <tr class="row">
                      <td class="col-2">Gilgamesh, God King</td>
                      <td class="col-2"><img src ="images/3rdProduct.jpg" width = "100%">
                      <input type="hidden" name="image" min="0" value="3rdProduct.jpg"/>
                        <td class="col-2">
                          Php 500
                        <input type="hidden" name="price" min="0" value="500"/></td>
                        <td class="col-2">
                          <a href="products/3rdProduct.php" class="btn btn-primary">Details</a>
                  </tr>

                    <tr class="row">
                        <td class="col-2">The Seafarer</td>
                        <td class="col-2"><img src ="images/4thProduct.jpg" width = "100%">
                        <input type="hidden" name="image" min="0" value="4thProduct.jpg"/></td>
                          <td class="col-2">
                            Php 450
                          <input type="hidden" name="price" min="0" value="450"/></td>
                          <td class="col-2">
                            <a href="products/4thProduct.php" class="btn btn-primary">Details</a>
                    </tr>
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

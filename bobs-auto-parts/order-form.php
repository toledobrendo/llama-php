<<?php
  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/list-of-products.php');
 ?>
  <body>
    <!-- hello-world.php or hello_world.php -->
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-5">Item</th>
                  <th class="col-4">Quantity</th>
                  <th class="col-3">Price</th>
                </tr>
              </thead>
              <tbody>
                <<?php
                foreach($productList as $input){
                 echo '<tr class="row">
                  <td class="col-4">
                    '.$input->name.'
                  </td>
                  <td class="col-4">
                      <input type="number" name="'.$input->quantity.'" maxlength="3" min="0" max="10" class="form-control"/>
                    </td>
                    <td class="col-4">
                      Php. '.$input->price.'
                    </td>
                    </tr>';
                  }
                 ?>

                <tr class="row">
                    <td class="col-5">How did you find Bob's</td>
                    <td class="col-4">
                      <select name="find" class="custom-select">
                        <option value="regular">I'm a regular customer</option>
                        <option value="tv">TV advertising</option>
                        <option value="phone">Phone Directory</option>
                        <option value="mouth">Word of mouth</option>
                      </select>
                    </td>
                </tr>
                <tr class="row">
                  <td colspan="2" class="col-9">
                    <a href="freight-cost.php" class="btn btn-secondary float-right">Freight Cost</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
<<?php
  require_once('view-comp/footer.php');
 ?>

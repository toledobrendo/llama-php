<?php
  // include 'message.php';
  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
?>
          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-4">Item</th>
                  <th class="col-5">Price</th>
                  <th class="col-3">Quantity</th>   
                </tr>
              </thead>
              <tbody>
                <?php

                  foreach ($productInputs as $productInput) {
                    echo '<tr class="row">
                            <td class="col-5">'.$productInput->desc.'</td>
                            <td class="col-2">'.$productInput->price.'</td>
                            <td class="col-4">
                              <input type="text" name="'.$productInput->name.'" maxlength="3" class="form-control"/>
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
<?php
  require_once('view-comp/footer.php');
?>
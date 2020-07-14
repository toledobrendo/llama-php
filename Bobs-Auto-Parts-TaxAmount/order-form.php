<?php
  require_once('view/header.php');
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
                  foreach($productInputs as $productInput) {
                    echo '<tr class="row">
                            <td class="col-5">
                              '.$productInput->desc.'
                            </td>
                            <td class="col-2">
                              '.$productInput->price.'
                            </td>
                            <td class="col-4">
                              <input type="text" name="'.$productInput->name.'" maxlength="3" class="form-control"/>
                            </td>
                          </tr>';
                  }
                 ?>

                <tr class="row">
                  <td colspan="2" class="col-9">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </form>
          
          <?php
            require_once('view/footer.php');
          ?>

    <?php
      require_once('view/header.php');
      require_once('model/ProductBean.php');
      require_once('model/list-of-products.php');
     ?>
        <h3 class="card-title">Order Form</h3>
        <form action="process-order.php" method="post">
          <table class="table">
            <thead>
              <tr class="row">
                <th class="col-4">Item</th>
                <th class="col-3">Price</th>
                <th class="col-2">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($productInputs as $productInput){
                  echo '<tr class="row">
                          <td class="col-4">
                            '.$productInput->price.'
                          </td>
                          <td class="col-3">
                            Php. '.$productInput->productName.'.00
                          </td>
                          <td class="col-2">
                            <input type="number" name="'.$productInput->tagName.'" maxlength="3" min="0" max="10" class="form-control"/>
                          </td>
                        </tr>';
                }
                ?>
              <tr class="row">
                <td class="col-5">How did you find Bob's</td>
                <td class="col-4">
                  <select name="find" class="custom-select">
                    <option value="regular">I'm a regular customer</option>
                    <option value="tv">Television advertising</option>
                    <option value="phone">Phone</option>
                    <option value="mouth">A Person</option>
                  </select>
                </td>
                <td>
                  <input type='hidden' name='input_name' value="<?php serialize($productInputs); ?>" />
                </td>
              </tr>
              <tr class="row">
                <td colspan="2" class="col-9">
                  <button type="submit" class="btn btn-success float-right ">Submit</button>
                  <a href="freight-cost.php" class="btn btn-warning float-right mr-3">Freight</a>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      <?php require_once('view/footer.php'); ?>

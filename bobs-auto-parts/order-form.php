    <?php require_once('view-comp/header.php');?>
        <h3 class="card-title">Order Form</h3>
        <form action="process-order.php" method="post">
          <table class="table">
            <thead>
              <tr class="row">
                <th class="col-5">Item</th>
                <th class="col-4">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $productInputs = array(
                  array('Product' => 'Tire', 'name' => 'tireQty'),
                  array('Product' => 'Oil', 'name' => 'oilQty'),
                  array('Product' => 'Spark Plug', 'name' => 'sparkQty')
                );

              foreach($productInputs as $productInput){
                echo '<tr class="row">
                        <td class="col-5">'.$productInput['Product'].'</td>
                        <td class="col-6">
                          <input type="number" name="'.$productInput['name'].'"  min="0" class="form-control"/>
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
      <?php require_once('view-comp/footer.php'); ?>

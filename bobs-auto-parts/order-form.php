<?php require_once('viewer/header.php') ?>
          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-4">Item</th>
                  <th class="col-4">Price</th>
                  <th class="col-4">Quantity</th>
                </tr>
              </thead>
              <tbody>
                <!-- <tr class="row">
                  <td class="col-5">Tires</td>
                  <td class="col-4">
                    <input type="number" name="tireQty" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-5">Oil</td>
                  <td class="col-4">
                    <input type="number" name="oilQty" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-5">Spark Plugs</td>
                  <td class="col-4">
                    <input type="number" name="sparkQty" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                </tr> -->
                <?php
                $productList = array(
                  array('item' => 'Tire', 'price' => 100, 'name' => 'tireQty'),
                  array('item' => 'Oil', 'price' => 10, 'name' => 'oilQty'),
                  array('item' => 'Spark Plug', 'price' => 5, 'name' => 'sparkQty')
                );

              foreach($productList as $products){
                echo '<tr class="row">
                        <td class="col-4">'.$products['item'].'
                        </td>
                        <td class="col-4">'.$products['price'].'
                        </td>
                        <td class="col-4">
                          <input type="number" name="'.$products['name'].'"  min="0" class="form-control"/>
                        </td>
                      </tr>';
              }

              ?>
                <tr class="row">
                    <td class="col-4">How did you find Bob's</td>
                    <td class="col-4"></td>
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
                  <td class="col-12">
                    <a href="freight-cost.php" class="btn btn-secondary float-right">Freight Cost</a>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
<?php require_once('viewer/footer.php') ?>

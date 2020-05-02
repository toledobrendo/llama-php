<?php
  require_once('view-comp/header.php');
 ?>
      	<h3 class = "card-title"> Order Form </h3>
          <form action = "process-order.php" method = "post">
            <table class = "table table-condensed">
              <thead>
                <tr class = "row">
                  <th class = "col-5"> Item Name </th>
                  <th class = "col-3"> Price </th>
                  <th class = "col-4"> Quantity </th>
                </tr>
              </thead>

              <tbody>

                <?php
                $items = array(
                            array( 'Item' => 'Oil', 'name' => 'tireQuantity', 'Price' => 50),
                            array( 'Item' => 'Tires', 'name' => 'oilQuantity', 'Price' => 100),
                            array( 'Item' => 'Spark Plugs', 'name' => 'sparkQuantity', 'Price' => 30)
                            );

                foreach ($items as $item) {
                  echo '<tr class = "row">
                            <td class = "col-5"> '.$item['Item'].' </td>
                            <td class = "col-3"> '.$item['Price'].' </td>
                            <td class = "col-4">
                              <input type = "number" name = '.$item['name'].' min = "0" max = "10" class="form-control"/>
                            </td>
                          </tr>';
                }

              ?>
                <!--<tr class = "row">
                  <td class = "col-5"> Tires </td>
                  <td class = "col-4">
                    NOTE: -1, hindi gagana
                    <input type = "number" name = "tireQuantity" maxlength = "3" min = "0" max = "10" class="form-control"/>
                  </td> -->

                  <!-- <tr class = "row">
                    <td class = "col-5"> Oil </td>
                    <td class = "col-4">
                      <input type = "number" name = "oilQuantity" maxlength = "3" min = "0" max = "10" class="form-control"/>
                    </td>

                    <tr class = "row">
                      <td class = "col-5"> Spark Plugs </td>
                      <td class = "col-4">
                        <input type = "number" name = "sparkQuantity" maxlength = "3" min = "0" max = "10" class="form-control"/>
                      </td> -->
                      <tr class="row">
                        <td class="col-5"> How did you find Bob's </td>
                        <td class="col-3"> </td>
                        <td class="col-4">
                          <select name="find" class="custom-select">
                            <option value="regular">I am a regular customer</option>
                            <option value="tv">TV advertising</option>
                            <option value="phone">Phone Directory</option>
                            <option value="mouth">Word of mouth </option>
                          </select>
                      </tr>

                      <tr class = "row">
                        <td colspan="2" class = "col-12">
                          <a href="freight-cost.php" class="btn btn-secondary float-right">Freight Cost</a>
                          <button type = "submit" class="btn btn-primary float-right"> Submit </button>
                        </td>
                      </tr>
                </tr>

              </tbody>
            </table>
          </form>
      </div>
    </div>
  </div>
  <?php
    require_once('view-comp/footer.php');
   ?>

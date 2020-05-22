<?php
require_once('view-comp/header.php');
require_once('model/productBean.php');
require_once('model/ProductList.php');
 ?>
      <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-5">Item</th>
                  <th class="col-4">Price</th>
                  <th class="col-3">Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php

                // $productInputs = array(
                //     array('Product' => 'Tire', 'name' => 'tireQty'),
                //     array('Product' => 'Oil', 'name' => 'oilQty'),
                //     array('Product' => 'Spark Plug', 'name' => 'sparkQty')
                //   );

                foreach($productList as $productInput){
                  echo '<tr class="row">
                          <td class="col-4">
                             '.$productInput->name.'
                           </td>
                           <td class="col-4">
                             Php. '.$productInput->price.'
                           </td>
                           <td class="col-4">
                             <input type="number" name="'.$productInput->description.'" maxlength="3" min="0" max="10" class="form-control"/>
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
        </div>
      </div>
    </div>
    <!-- LA ME FOOTER -->
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
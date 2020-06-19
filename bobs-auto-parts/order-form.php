<?php
  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
 ?>
      	<h3 class = "card-title"> Order Form </h3>
          <form action = "process-order.php" method = "post">
            <table class = "table table-condensed">
              <thead>
                <tr>
                  <th> Item Name </th>
                  <th> Price </th>
                  <th> Quantity </th>
                </tr>
              </thead>

              <tbody>

                <?php
                foreach ($productList as $product) {
                  echo '<tr>
                            <td> '.$product->name.' </td>
                            <td> '.$product->price.' </td>
                            <td>
                              <input type = "number" name = "'.$product->qty.'" min = "0" max = "10" class="form-control"/>
                            </td>
                          </tr>';
                }

              ?>
              <td>How did you find Bob's<td>
                          <td>
                            <select name="find" class="custom-select">
                              <option value="regular">I'm a regular customer</option>
                              <option value="tv">TV Advertisement</option>
                              <option value="phone">From Phone directory</option>
                              <option value="mouth">From Word of Mouth</option>
                            </select>
                          </td>
                        </tr>
                        <tr>

                      <tr>
                        <td colspan="3">
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

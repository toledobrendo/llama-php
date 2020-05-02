<?php
  require_once('view-comp/header.php');
 ?>

          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
                <?php
                  $items = array(
                              array('Item' => 'Oil', 'Price' => 50, 'Quantity' => '<input type="number" name="oilQty" maxlength="3" min="0" max="10" class="form-control"/>'),
                              array('Item' => 'Tires', 'Price' => 100, 'Quantity' => '<input type="number" name="tireQty" maxlength="3" min="0" max="10" class="form-control"/>'),
                              array('Item' => 'Spark Plugs', 'Price' => 150, 'Quantity' => '<input type="number" name="sparkQty" maxlength="3" min="0" max="10" class="form-control"/>')
                            );


                            echo '<table class="table table-condensed">
                                    <thead>
                                    <tr>
                                      <th>Item</th>
                                      <th>Price</th>
                                      <th>Quantity</th>
                                    </tr>
                                    </thead>';
                            foreach ($items as $item) {
                              echo '<tr>';
                              foreach ($item as $value) {
                                echo '<td>'.$value.'</td>';
                              }
                              echo '</tr>';
                            }
                            echo '<tr>
                              <td>How did you find Bob\'s<td>
                                <td>
                                  <select name="find" class="custom-select">
                                    <option value="regular">I\'m a regular customer</option>
                                    <option value="tv">TV Advertisement</option>
                                    <option value="phone">From Phone directory</option>
                                    <option value="mouth">From Word of Mouth</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td colspan=\'3\'>
                                  <a href="freight-cost.php" class="btn btn-warning btn-sm float-right">Freight Cost</a>
                                  <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                                </td>
                              </tr>';
                            echo '</table>';
                ?>
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

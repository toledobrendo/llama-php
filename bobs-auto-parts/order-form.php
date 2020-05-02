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


<?php
    require_once('view-comp/footer.php');
?>

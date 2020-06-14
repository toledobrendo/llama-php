<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
    <body>

            <h3 class="card-title">Order Form</h3>
            <form  action="process-order.php" method="post">
              <?php
              $products = array(
                array('Item' => 'Tires', 'Price' => 100, 'Quantity' => '<input type="number" name="tireQty" maxlength="3" min="0" max="10" class="form-control"/>'),
                array('Item' => 'Oil', 'Price' => 50, 'Quantity' => '<input type="number" name="oilQty" maxlength="3" min="0" max="10" class="form-control"/>'),
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
          foreach ($products as $product) {
                        echo '<tr>';
          foreach ($product as $value) {
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
                  <a href="freight-cost.php" class="btn btn-secondary btn-sm float-right">Freight Cost</a>
                  <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                </td>
              </tr>';
              echo '</table><br/><br/>';
              ?>
          </form>


       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
       integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
       integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
require_once('view-comp/header.php');
 ?>
  <h3 class="card-title">Order Form</h3>
  <form action="process-order.php" method="post">
    <table class="table">
      <thead>
        <tr class="row">
          <th class="col-6">Item</th>
          <th class="col-3">Price</th>
          <th class="col-3">Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $productInputs = array(
            array('Product' => 'Tire', 'name' => 'tireQty', 'price' => 100),
            array('Product' => 'Oil', 'name' => 'oilQty', 'price' => 50),
            array('Product' => 'Spark Plug', 'name' => 'sparkQty', 'price' => 30)
        );

        foreach($productInputs as $productInput){
          echo '<tr class="row">
                  <td class="col-6">
                    '.$productInput['Product'].'
                  </td>
                  <td class="col-2">
                    '.$productInput['price'].'
                  </td>
                  <td class="col-4">
                    <input type="number" name="'.$productInput['name'].'" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                </tr>';
        }

        ?>

        <tr class="row">
          <td class="col-8">How did you find Bob's</td>
          <td class="col-4">
            <select name="find" class="custom-select">
              <option value="regular">I'm a regular customer</option>
              <option value="tv">Television advertising</option>
              <option value="phone">Phone Directory</option>
              <option value="mouth">Word of mouth</option>
            </select>
          </td>
        </tr>
        <tr class="row">
          <td colspan="3" class="col-12">
            <button type="submit" class="btn btn-primary float-right" style="margin:5px">Submit</button>
            <a href="freight-cost.php" class="btn btn-secondary float-right" style="margin:5px">Freight</a>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
<?php
  //require_once('view-comp/footer.php'); NO FOOTER
?>

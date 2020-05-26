<?php
require_once('model/product.php');
  require_once('view-comp/header.php');
?>
    <title>Order Form</title>
<?php
  require_once('view-comp/header-nav-bar.php');
?>
  <?php

//creation of object
  // Note: These objects must be accessible in process-order.php. Include the prices as well.
  $tire = new Product();
  $tire->name = 'Tires';
  $tire->key =  'tireQty';

  $oil = new Product();
  $oil->name = 'Oil';
  $oil->key ='oilQty';

  $spark = new Product();
  $spark->name = 'Spark Plugs';
  $spark->key = 'sparkQty';

  echo '  <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Order Form</h3>
          <form action="process-order.php" method="post">
            <table class="table">
              <thead>
                <tr class="row">
                  <th class="col-5">Item</th>
                  <th class="col-4">Quantity</th
                </tr>
              </thead>

              <tbody>';

              // $someNiceVariableName = array(
              //                           array('key' => 'tireQty', 'item' => 'Tires'),
              //                           array('key' => 'oilQty', 'item' => 'Oil'),
              //                           array('key' => 'sparkQty', 'item' => 'Spark plugs'));
              //
              // for ($iteration=0; $iteration < 3 ; $iteration++) {
              //   echo '  <tr class="row">
              //     <td class="col-5">'.$someNiceVariableName[$iteration]['item'].'</td>
              //     <td class="col-4">
              //       <input type="number" name="'.$someNiceVariableName[$iteration]['key'].'" maxlength="3" min="0" max="10" class="form-control"/>
              //     </td>
              //     </tr>';
              // }

              //array of objects
              $products = array($tire, $oil, $spark);

              for ($iteration=0; $iteration < 3 ; $iteration++) {
                echo '  <tr class="row">
                  <td class="col-5">'.$products[$iteration]->name.'</td>
                  <td class="col-4">
                    <input type="number" name="'.$products[$iteration]->key.'" maxlength="3" min="0" max="10" class="form-control"/>
                  </td>
                  </tr>';
              } ?>
              <tr class="row">
                <td class="col-5">How did you find Bob's</td>
                <td class="col-4">
                  <select name="find" class="custom-select">
                    <option value="none"></option>
                    <option value="regular">I'm a regular customer</option>
                    <option value="tv">TV advertising</option>
                    <option value="phone">Phone Directory</option>
                    <option value="mouth">Word of mouth</option>
                  </select>
                </td>
              </tr>
              <tr class="row">
                <td colspan="2" class="col-9">
                  <a href="../index.php">
                    <button type="button" class="btn btn-danger float-left">Cancel</button> </a>
                  <a href="freight-cost.php" class="btn btn-warning float-right">Freight Cost</a>
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                </td>
              </tr>
              </tbody>
            </table>
          </form>
      <?php
        require_once('view-comp/footer.php');
      ?>

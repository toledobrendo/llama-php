<?php
  require_once('view-comp/header.php');
  require_once('model/product.php');
  require_once('model/product-list.php');
 ?>

<h3 class="card-title">Order Form</h3>
  <form action="process-order.php" method="post">
    <table class="table table-condensed">
      <thead>
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>
      </thead>
      <tbody>
        <?php
          $productList = new ProductList();
              foreach ($productList->product as $product) {
                echo "<tr>";
                  echo "<td>".$product->name."</td>";
                  echo "<td>".$product->price."</td>";
                  echo '<td><input type="number" class="form-control" name="'.$product->prodId.'" max="10" min="0" placeholder="Quantity"></input></td>';
                echo "</tr>";
              }

         ?>
        <tr>
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
          <td colspan=\'3\'>
            <a href="freight-cost.php" class="btn btn-warning btn-sm float-right">Freight Cost</a>
            <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
          </td>
        </tr>
      </tbody>
    </table><br/><br/>
  </form>



<?php
    require_once('view-comp/footer.php');
?>

<?php
@include 'includes/connect.php';
@include 'view-comp/header.php';
 ?>

<div class="card-header">
  Search Products
</div>

<div class="card-body">
  <form action="search-products.php" method="post">
    <div class="form-group">
      <label for="searchProduct">Search Product</label>
      <input type="text" id="searchProduct" name="searchProduct"
        class="form-control" placeholder="Search Product"/>
      <input type="hidden" name="open" value="1"/>
    </div>
    <div>
      <button type="submit" name="search" value="1" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

<?php
if (@$_POST['search'] == 1) {
  @$searchTerm = @$_POST['searchProduct'];

  @$query = 'SELECT * FROM items WHERE '.name.' LIKE \'%'.$searchTerm.'%\';';

  $result = $con->query($query);

  echo '<p>Result for Cards '.$searchTerm.'</p>';

  echo '<div class="row">';
    $row = $result -> fetch_assoc();
    echo '<div class="card col-4 mx-1">
      <div class="card-body">
        <h6> '.$row['name'].'</h6>
             '.$row['price'].'
        <div> <img src='.$row['img'].'></div>
      </div>
    </div>';
  } else {

  }
?>
<a class="btn btn-secondary" href="browse-products.php">Go Back</a>
</body>
</html>

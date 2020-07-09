<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>
<?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<center><p class = "text-warning bg-danger"><b>Fill in all fields!</b></p></center>';
    }
    else if($_GET['error'] == "emptytitle"){
      echo '<center><p class = "text-warning bg-danger"><b>Empty Book Title</b></p></center>';
    }
    else if($_GET['error'] == "emptyname"){
      echo '<center><p class = "text-warning bg-danger"><b>Empty Author Name</b></p></center>';
    }
    else if($_GET['error'] == "emptyisbn"){
      echo '<center><p class = "text-warning bg-danger"><b>Empty ISBN</b></p></center>';
    }
    else if($_GET['error'] == "emptyimageurl"){
      echo '<center><p class = "text-warning bg-danger"><b>Empty Image Url</b></p></center>';
    }
  }

    else if (@$_GET["success"] == "addedbookexistingauth"){
      echo '<center><p class = "bg-success" style="color: white;">Added book successfuly with existing author!</p></center>';
    }

    else if (@$_GET["success"] == "addedbooknewauth"){
      echo '<center><p class = "bg-success" style="color: white;">Added book successfuly with new author!</p></center>';
    }
 ?>
<div class="card-body">
  <form action="php-scripts-h6/addbook.script.php" method="post">
    <div class="form-group">
      <label for="searchTerm">Book Title</label>
      <input type="text" name="title" name="searchTerm"
        class="form-control" />

    </div>

    <div class="form-group">
      <label for="searchTerm">Author Name</label>
      <input type="text" name="name" name="searchTerm"
        class="form-control" />
    </div>

    <div class="form-group">
      <label for="searchTerm">ISBN</label>
      <input type="text" name="isbn" name="searchTerm"
        class="form-control" />
    </div>

    <div class="form-group">
      <label for="searchTerm">Image URL</label>
      <input type="text" name="imageUrl" name="searchTerm"
        class="form-control" />
    </div>


    <div>
      <button type="submit" class="btn btn-primary"  name="book-submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>


<?php require_once('view-comp/header.php');
      require_once('process/connection.php');


?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post" autocomplete="off">
    <div class="form-group">
      <label for="bookTitle">Book Title</label>
      <input id="bookTitle" name="bookTitle" class="form-control" type="text"/>
    </div>
    <div class="form-group">
      <label for="authorName">Author Name</label><br>
      <label  class="small" style="color:red;">You can select existing authors in the database.</label>
      <input id="authorName" name="authorName" class="form-control" type="text" list="cars"/>
      <datalist id="cars">
        <?php
        //Will fetch existing authors in the database and place it in the datalist
        $sql = "SELECT * FROM author";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

          echo "<option>".$row['name']."</option>";

        }
        ?>

      </datalist>



    </div>
    <div class="form-group">
      <label for="ISBN">ISBN</label>
      <input id="ISBN" name="ISBN" class="form-control" type="text"/>
    </div>
    <div class="form-group">
      <label for="imgURL">Image Url</label>
      <input id="imgURL" name="imgURL" class="form-control" type="text"/>
    </div>
    <div class="text-center">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

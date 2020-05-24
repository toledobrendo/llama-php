<?php require_once('view-comp/header.php');
  include 'dbconnection/connect.php';
?>
<div class="card-header">
  Add Author
</div>
<div class="card-body">
  <form action="process-add-book.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="bookName">Book Name</label>
      <input id="bookName" name="bookName" class="form-control" type="text"/>
      <br />
      <label for="authorName">Choose author:</label>
      <select name="authorName" id="authorName">
        <?php
        $result = mysqli_query($db, "SELECT * FROM author");
        while($row = mysqli_fetch_array($result)){
          echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
         ?>
      </select>
      <p style="color:red;">
        note: if is <strong>NOT</strong> on the dropdown <strong>ADD AUTHOR FIRST!!!</strong>
      </p>
      <br />
      <label for="ISBN">ISBN</label>
      <input id="ISBN" name="ISBN" class="form-control" type="text"/>
      <br />
      <label for="bookImage">Image URL</label>
      <input id="bookImage" name="bookImage" class="form-control" type="text"/>
      <!-- <input type="file" name="fileToUpload" id="fileToUpload"> for upload-->
    </div>
    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

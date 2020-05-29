<?php require_once('view-comp/header.php');?>

<?php require_once('DB_Connection.php'); ?>

<div class="card-header">
  Add Author
</div>
<div class="card-body">
  <form action="processes/process-add-author.php" method="post">
    <div class="form-group">
      <label for="authorName">Author Name : </label>
      <input id="authorName" class="form-control" type="text" name="authorName" required>
    </div>
      <button class="btn btn-success" type="submit" name="button">Submit</button>
    </div>
  </form>
</div>



<?php require_once('view-comp/footer.php');?>

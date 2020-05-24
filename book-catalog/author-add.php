<?php require_once('view-comp/header.php');?>

<div class="card-header">
  Add Author
</div>
<div class="card-body">
  <form action="process-author-add.php" method="post">
    <div class="form-group">
      <label for="authorName">Author Name</label>
      <input id="authorName" class="form-control" type="text" name="authorName">
    </div>
    <div>
      <button class="btn btn-primary" type="submit" name="button">Submit</button>
    </div>
  </form>
</div>

<?php require_once('view-comp/footer.php');?>

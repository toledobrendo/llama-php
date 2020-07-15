<?php require_once('view/header.php'); ?>

<div class="card-header">
  Add Author
</div>
<div class="card-body">
  <form action="add-author.inc.php" method="post">
    <div class="form-group">
      <label for="author-name">Author Name</label>
      <input type="authorName" name="author-name" class="form-control" type="text"/>
    </div>
    <div>
      <button class="btn btn-primary" type="submit" name="add-author-submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view/footer.php'); ?>

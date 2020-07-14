<?php require_once('view-comp/header.php');
require_once('connect.php')?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="authorName">Book Title</label>
      <input id="title" name="title" class="form-control" type="text"/>

      <label for="authorName">Image URL</label>
      <input id="pic_url" name="pic_url" class="form-control" type="text"/>

      <label for="authorName">ISBN</label>
      <input id="isbn" name="isbn" class="form-control" type="text"/>

      <label for="authorName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text"/>
    </div>
    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

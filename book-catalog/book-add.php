
<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="bookTitle">Book Title</label>
      <input id="bookTitle" name="bookTitle" class="form-control" type="text"/>
    </div>
    <div class="form-group">
      <label for="authorName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text"/>
    </div>
    <div class="form-group">
      <label for="ISBN">ISBN</label>
      <input id="ISBN" name="ISBN" class="form-control" type="text"/>
    </div>
    <div class="form-group">
      <label for="imgURL">Image Url</label>
      <input id="imgURL" name="imgURL" class="form-control" type="text"/>
    </div>
    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

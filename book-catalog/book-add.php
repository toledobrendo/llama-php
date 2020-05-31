<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
Add Author
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="authorName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="bookTitle">Book Title</label>
      <input id="bookTitle" name="bookTitle" class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="isbn">ISBN</label>
      <input id="isbn" name="isbn" class="form-control" type="text">
    </div>
    <div class="form-group">
      <label for="bookThumbnail">Book Thumbnail</label>
      <input id="bookThumbnail" name="bookThumbnail" class="form-control" type="url">
    </div>
    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

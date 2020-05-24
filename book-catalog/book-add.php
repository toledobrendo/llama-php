<?php require_once('view-comp/header.php');?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="bookTitle">Book Title</label>
      <input id="bookTitle" class="form-control" type="text" name="bookTitle" required>
      <label for="authorName">Author Name</label>
      <input id="authorName" class="form-control" type="text" name="authorName" required>
      <label for="ISBN">ISBN</label>
      <input id="ISBN" class="form-control" type="text" name="ISBN" required>
      <label for="imgURL">Image URL</label>
      <input id="imgURL" class="form-control" type="text" name="imgURL">
    </div>
    <div>
      <button class="btn btn-primary" type="submit" name="button">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php');?>

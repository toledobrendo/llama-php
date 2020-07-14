<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>

<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="title">Book Title</label>
      <input type="text" name="bookTitle"  class="form-control" required />

    </div>

    <div class="form-group">
      <label for="name">Author Name</label>
      <input type="text" name="bookName"    class="form-control" required />
    </div>

    <div class="form-group">
      <label for="isbn">ISBN</label>
      <input type="text" name="bookIsbn"  class="form-control" required />
    </div>

    <div class="form-group">
      <label for="imageurl">Image URL</label>
      <input type="text" name="picUrl"  class="form-control" required />
    </div>


    <div>
      <button type="submit" class="btn btn-primary"  name="add-submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

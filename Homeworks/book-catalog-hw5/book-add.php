<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>

<div class="card-body">
  <form action="process-book-add.php" method="post">

    <div class="form-group">
      <label for="bookName">Title</label>
      <input id="bookName" name="bookName" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="bookName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="authorName">ISBN</label>
      <input id="bookIsbn" name="bookIsbn" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="authorName">Image url</label>
      <input id="bookImg" name="bookImg" class="form-control" type="text"/>
    </div>

    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

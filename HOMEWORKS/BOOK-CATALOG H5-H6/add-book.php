<?php require_once('view/header.php'); ?>

<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="add-book.inc.php" method="post">
    <div class="form-group">
      <label for="title">Book Title</label>
      <input type="title" name="book-title" class="form-control" type="text" required="" />
    </div>

     <div class="form-group">
      <label for="isbn">ISBN</label>
      <input type="isbn" name="isbn" class="form-control" type="text" required=""/>
    </div>
     <div class="form-group">
      <label for="pic_url">Image URL</label>
      <input type="pic_url" name="pic_url" class="form-control" type="text" required=""/>
    </div>
    <div class="form-group">
     <label for="authorName">Author Name</label>
     <input type="authorName" name="author-name" class="form-control" type="text" required=""/>
   </div>
    <div>
      <button class="btn btn-primary" type="submit" name="add-book-submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view/footer.php'); ?>

<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-book-add.php" method="post">
    <div class="form-group">
      <label for="bookName">Book Name</label>
      <input id="bookName" name="bookName" class="form-control" type="text" required="required"/>
    </div>
    <div>
      <label for="authorName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text" required="required"/>
    </div>
    <div>
      <label for="isbn">ISBN</label>
      <input id="isbn" name="isbn" class="form-control" type="text" required="required"/>
    </div>
    <div>
      <label for="$imageUrl">Image Url</label>
      <input id="pic_url" name="pic_url" class="form-control" type="text" required="required"/>
    </div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

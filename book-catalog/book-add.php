<?php require_once('view-comp/header.php'); ?>

<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="process-author-add.php" method="post">
    <div class="form-group">
      <label for="authorName">Book Title</label>
      <input type="authorName" name="authorName" class="form-control" type="text" required="" />
    </div>
     <div class="form-group">
      <label for="authorName">Author Name</label>
      <input type="authorName" name="authorName" class="form-control" type="text" required=""/>
    </div>
     <div class="form-group">
      <label for="authorName">ISBN</label>
      <input type="authorName" name="authorName" class="form-control" type="text" required=""/>
    </div>
     <div class="form-group">
      <label for="authorName">Image URL</label>
      <input type="authorName" name="authorName" class="form-control" type="text" required=""/>
    </div>
    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>
          
       
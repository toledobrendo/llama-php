<?php require_once('view-comp/header.php');?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="processes/process-add-book.php" method="post">
    <div class="form-group">
      <label for="bookTitle">Book Title : </label>
      <input class="form-control" type="text" name="bookTitle" placeholder="Enter Book Title" required>
      <label for="authorName">Author Name : </label>
      <input class="form-control" type="text" name="authorName" placeholder="Enter Author Name" required>
      <label for="ISBN">ISBN : </label>
      <input class="form-control" type="text" name="ISBN" placeholder="Enter ISBN" required>
      <label for="imgURL">Image Path : </label>
      <input class="form-control" type="text" name="imgPath" placeholder="Enter Image Path" required>
      <p class="font-weight-light">Format: ../assets/images-for-book/FILE_NAME_OF_IMAGE.png</p>
    </div>
    <div>
      <button class="btn btn-success" type="submit" name="button">Submit</button>
    </div>
  </form>
</div>

<?php require_once('view-comp/footer.php');?>

<?php require_once('view-comp/header.php'); ?>

<div class="card-header">
  Add Author
</div>
<div class="card-body">
    <form class="" action="process/process-add-author.php" method="post">
      <div class="form-group">
          <label for="authorName">Author Name</label>
          <input class="form-control" type="text" id ="authorName" name="authorName"/>
      </div>
      <div>
        <button class="btn btn-dark" type="submit">Submit</button>
      </div>
    </form>
</div>

<?php require_once('view-comp/footer.php'); ?>

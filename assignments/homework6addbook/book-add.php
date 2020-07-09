<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book
</div>
<div class="card-body">
  <form action="results.php" method="post">
    <div class="form-group">
      <label for="searchTerm">Book Title</label>
      <input type="text" id="searchTerm" name="searchTerm"
        class="form-control" placeholder="Search Term"/>

    </div>

    <div class="form-group">
      <label for="searchTerm">Author Name</label>
      <input type="text" id="searchTerm" name="searchTerm"
        class="form-control" placeholder="Search Term"/>
    </div>

    <div class="form-group">
      <label for="searchTerm">ISBN</label>
      <input type="text" id="searchTerm" name="searchTerm"
        class="form-control" placeholder="Search Term"/>
    </div>

    <div class="form-group">
      <label for="searchTerm">Image URL</label>
      <input type="text" id="searchTerm" name="searchTerm"
        class="form-control" placeholder="Search Term"/>
    </div>


    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<?php require_once('view-comp/footer.php'); ?>

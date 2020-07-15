<?php require_once('view/header.php'); ?>

<div class="card-header">
  Search Book
</div>
<div class="card-body">
 <form action="results-page.php" method="post">
    <div class="form-group">
      <label for="search-type">Choose Search Type</label>
      <select class="form-control" id="search-type" name="search-type">
        <option value="author">Author</option>
        <option value="title">Title</option>
        <option value="isbn">ISBN</option>
      </select>
    </div>
    <div class="form-group">
      <label for="search-term">Search term</label>
      <input type="text" id="search-term" name="search-term" class="form-control" placeholder="Search Term">
    </div>
    <div>
      <button type="submit" class="btn btn-primary" name="search-submit">Submit</button>
    </div>
  </form>

<?php require_once('view/footer.php'); ?>

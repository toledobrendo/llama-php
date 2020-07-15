<?php require_once('view/header.php'); ?>
<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php

  if (isset($_POST['add-author-submit'])) {

    $authorName = $_POST['author-name'];

    try{
      if (empty($authorName)) {
        throw new Exception('Fill in required fields. Please try again.');
      }

      @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Cannot connect to database.');
      }

      $query = 'INSERT INTO author (name) values (?)';
      $stmt = $db->prepare($query);
      $stmt->bind_param("s", $authorName);
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." The author is inserted into the database.";
      } else {
        throw new Exception('The author was not added.');
      }

      $stmt->close();

    } catch (Exception $e) {
      error_log($e->getMessage());
      echo $e->getMessage();
    }

  }
  ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="add-author.php">Back</a>
</div>
<?php require_once('view/footer.php'); ?>

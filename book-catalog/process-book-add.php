<?php require_once('view-comp/header.php'); ?>
<div class="card-header">Add Book Result </div>
<div class="card-body">
  <?php
    $bookTitle = $_POST['bookTitle'];
    $authorName = $_POST['authorName'];
    $ISBN = $_POST['ISBN'];
    $pic_url = $_POST['pic_url'];

    try{
      if (!$authorName) {
        throw new Exception('Book details not complete. Please try again.');
      }

      @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Query by prepared statements
      // Note: Book and Author tables are not normalized
      $query = 'insert into book (bookTitle, authorName, ISBN, pic_url) values (?,?,?,?)';/
      $stmt = $db->prepare($query);
      $stmt->bind_param("ssss", $authorName);/
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows."The book is inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }

      $stmt->close();

    } catch (Exception $e) {
      error_log($e->getMessage());
      echo $e->getMessage();
    }
  ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="author-add.php">Back</a>
</div>
<?php require_once('view-comp/footer.php'); ?>

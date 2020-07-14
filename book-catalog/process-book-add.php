<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Book Result
</div>
<div class="card-body">
  <?php
    $authorName = $_POST['authorName'];
    $bookName = $_POST['title'];
    $imageURL = $_POST['pic_url'];
    $isbn = $_POST['isbn'];

    try{
      if (!$authorName) {
        throw new Exception('Author details not complete. Please try again.');
      }

    @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Note: Observe proper indention.
      $query = 'SELECT * FROM author WHERE name LIKE \''.$authorName.'\';';
      $result = $db->query($query);
      $row = $result -> fetch_assoc();

      if($row['name'] == $authorName){
          $query1 = 'insert into book (title, isbn, pic_URL, author_id) values (?, ?, ?, ?)';
          $stmt = $db->prepare($query1); //stmt1
          $stmt->bind_param('ssis',$bookName,$imageURL,$isbn,$row['id']); //stmt1
          $stmt->execute(); //stmt1
      }

      else{
        $query = 'insert into author (name) values (?)';
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $authorName);
        $stmt->execute();

        $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." author inserted into the database.";
      } else {
        throw new Exception('Error: The author was not added.');
      }

      $query1 = 'insert into book (title, isbn, pic_URL, author_id) values (?, ?, ?, ?)';
      $stmt = $db->prepare($query1); //stmt1
      $stmt->bind_param('siss',$bookName,$isbn,$imageURL,$authorID); //stmt1
      $stmt->execute(); //stmt1
      }

      $affectedRows = $stmt->affected_rows; //stmt1
      if ($affectedRows > 0) {
        echo $affectedRows." Book inserted into the database.";
      } else {
        throw new Exception('Error: The Book was not added.');
      }

      $stmt->close();

    } catch (Exception $e) {
      error_log($e->getMessage());
      echo $e->getMessage();
    }
  ?>
</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="book-add.php">Back</a>
</div>
<?php require_once('view-comp/footer.php'); ?>

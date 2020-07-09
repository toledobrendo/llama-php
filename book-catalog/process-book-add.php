<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php
    $bookTitle  = $_POST['bookTitle'];
    $authorName = $_POST['authorName'];
    $ISBN       = $_POST['ISBN'];
    $imgURL     = $_POST['imgURL'];
    $id         = "";

    try{
      try {
        if (!$bookTitle) {
          throw new Exception('Book details not complete. Please try again.');
        }
        if (!$authorName) {
          throw new Exception('Author details not complete. Please try again.');
        }
        if (!$ISBN) {
          throw new Exception('ISBN details not complete. Please try again.');
        }
        if (!$imgURL) {
          throw new Exception('IMG details not complete. Please try again.');
        }
      } catch (Exception $e) {
        error_log($e->getMessage());
        echo $e->getMessage();

      }


      require_once 'dbconnect.php';
      global $db;
      //check-author

      $sql = "SELECT id, name FROM author WHERE name='$authorName'";
      $result = $db->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          global $id;
          $id = $row['id'];
        }
      } else {
        //if Author does not exist;
        $stmt = $db->prepare("INSERT INTO author (name) VALUES (?)");
        $stmt->bind_param("s", $authorName);

        // set parameters and execute
        $authorName = $authorName;
        $stmt->execute();
        $stmt->close();

      }

      $stmt = $db->prepare("INSERT INTO book (title, isbn, author_id, pic_url) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssis", $bookTitle, $ISBN, $id, $imgURL);

      // set parameters and execute
      $bookTitle  = $bookTitle;
      $ISBN       = $ISBN;
      $id         = $id;
      $imgURL     = $imgURL;
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." book inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }



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

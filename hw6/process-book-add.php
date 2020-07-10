<?php require_once('view-comp/header.php'); ?>
<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php
    $authorName = $_POST['authorName'];
    $bookName=$_POST['bookName'];
    $isbn=$_POST['isbn'];
    $imageURL=$_POST['imageURL'];

    try{
      if (!$authorName) {
        throw new Exception('Author details not complete. Please try again.');
      }

     session_start();
      @$db = new mysqli("127.0.0.1:3306", "root", "", "php_lesson_db");

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Query by query string concatenation
      // $query = 'insert into author (name) values (\''.$authorName.'\')';
      // $result = $db->query($query);
      //
      // if ($result) {
      //   echo $db->affected_rows." author inserted into the database.";
      // } else {
      //   throw new Exception('Error: The author was not added.');
      // }

      // $authorName = $db->real_escape_string($authorName);

      // Query by prepared statements

      $query = 'select id from author where name = \''.$authorName.'\'';
      $result = $db->query($query);
      $resultCount = $result->num_rows;
      if ($resultCount == 0) {
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

      $stmt->close();

       $query = 'select id from author where name = \''.$authorName.'\'';
            $result = $db->query($query);
            $row = $result -> fetch_assoc();



      $authorID = $row['id'];
      
      $query1 = 'insert into book (title, isbn, pic_URL, author_id) values (?, ?, ?, ?)';
      $stmt1 = $db->prepare($query1);
      $stmt1->bind_param('siss',$bookName,$isbn,$imageURL,$authorID);
      $stmt1->execute();
      

      $affectedRows = $stmt1->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." Book inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }

      $stmt1->close();
    }
    else{
          $query = 'select id from author where name = \''.$authorName.'\'';
            $result = $db->query($query);
            $row = $result -> fetch_assoc();



      $authorID = $row['id'];
      
      $query1 = 'insert into book (title, isbn, pic_URL, author_id) values (?, ?, ?, ?)';
      $stmt1 = $db->prepare($query1);
      $stmt1->bind_param('siss',$bookName,$isbn,$imageURL,$authorID);
      $stmt1->execute();
      

      $affectedRows = $stmt1->affected_rows;
      if ($affectedRows > 0) {
        echo $affectedRows." Book inserted into the database.";
      } else {
        throw new Exception('Error: The book was not added.');
      }

      $stmt1->close();
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
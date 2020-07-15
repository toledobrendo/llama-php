<?php require_once('../view-comp/header.php'); ?>

<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
    <?php
        $authorName = $_POST['authorName'];

        try {
          if (!$authorName) {
            throw new Exception('Details are not complete. Please try again.');
          }

          @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

          $dbError = mysqli_connect_errno();
          if ($dbError) {
            throw new Exception('Error: Could not connect to database. Please try again.');
          }
          $query = "INSERT into author (NAME) values (?)";
          $stmt = $db->prepare($query);
          $stmt->bind_param("s", $authorName);

          $stmt->execute();

          @ $affectedRows = $stmt->$affected_rows;

          if ($affectedRows > 0) {
            echo $affectedRows." author inserted into the database.";
          }else {

            throw new Exception("author inserted into the database");
          }

          $stmt->close();

        } catch (Exception $e) {
          error_log($e->getMessage());
          echo $e->getMessage();
        }

     ?>
</div>
<div class="card-footer">
  <a class="btn btn-dark" href="../add-author.php">Back</a>
</div>

<?php require_once('../view-comp/footer.php'); ?>
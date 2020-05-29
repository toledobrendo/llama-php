<?php require_once('view-comp/header.php');
      require_once('process/connection.php');
?>

<div class="card-header">
  Add Author Result
</div>
<div class="card-body">
  <?php
    //Assignment for 5/30/20
    //@Wizerd-Dino Paulo R. Gomez
    //POST-VAR
    $bookTitle  =  mysqli_real_escape_string($conn, $_POST['bookTitle']);
    $authorName =  mysqli_real_escape_string($conn, $_POST['authorName']);
    $ISBN       =  mysqli_real_escape_string($conn, $_POST['ISBN']);
    $imgURL     =   mysqli_real_escape_string($conn, $_POST['imgURL']) ;

    //FORM-VALIDATIOn
    try {
        if (!$authorName) {
            throw new Exception('Author details not complete. Please try again.');
        } else if (!$bookTitle) {
            throw new Exception('Book Title details not complete. Please try again.');
        } else if (!$ISBN) {
            throw new Exception('ISBN details not complete. Please try again.');
        } else if (!$imgURL) {
            throw new Exception('Image URL details not complete. Please try again.');
        }



        //Search for existing author match
        $sql = "SELECT * FROM author WHERE name ='$authorName'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        $authorID = $row['id'];


        //if $count = 1, Retrieve ID and Insert Book Details
        if ($count == 1) {
          echo "Author already on database."."<br>";
          $sql = "INSERT INTO book (id,title, isbn, author_id, pic_url) VALUES (NULL,'$bookTitle', '$ISBN', '$authorID', '$imgURL')";
          $result = mysqli_query($conn,$sql);
                  if ($result > 0) {
                      echo "Author and Book inserted into the database.";
                  } else {
                      throw new Exception('Error: The Author and Book was not added.');
                  }

        }
        //if $count = 0, Insert new author and retrieve new author_id. Then insert new book details
         else {
              $sql = "INSERT INTO author (name) VALUES ('$authorName');";
              $result = mysqli_query($conn,$sql);
              //then we get the new authors id;
              $sql = "SELECT * FROM author WHERE name ='$authorName'";
              $result = mysqli_query($conn,$sql);
              $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
              $authorID = $row['id'];

              //then we insert the book
              $sql = "INSERT INTO book (id,title, isbn, author_id, pic_url) VALUES (NULL,'$bookTitle', '$ISBN', '$authorID', '$imgURL')";
              $result = mysqli_query($conn,$sql);
              if ($result > 0) {
                  echo "Author and Book inserted into the database.";
              } else {
                  throw new Exception('Error: The Author and Book was not added.');
              }
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

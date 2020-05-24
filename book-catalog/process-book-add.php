<?php require_once('view-comp/header.php') ?>
<div class="card-body">
<?php
  try {
    $bookTitle = $_POST['bookTitle'];
    $authorName = $_POST['authorName'];
    $ISBN = $_POST['ISBN'];
    $imgURL = $_POST['imgURL'];
    if(!$bookTitle || !$authorName || !$ISBN){
      throw new Exception('Book details incomplete. Try again.');
    }

    require_once('connection.php');

    $query = "SELECT `id` FROM `author` WHERE `name` = ?";
    $pStatement = $db->prepare($query);
    $pStatement->bind_param('s',$authorName);
    $pStatement->execute();
    $result = $pStatement->get_result();

    if($result->num_rows > 0){ //there is existing author.
      $authorId = implode("",$result->fetch_assoc());
      $pStatement->close();
      addBook($bookTitle,$ISBN,$authorId,$imgURL);
    }else{ //author not found, creating one.
      $pStatement->close();
      $query = 'INSERT INTO AUTHOR(NAME) VALUES(?)';
      $pStatement = $db->prepare($query);
      $pStatement->bind_param('s',$authorName);
      $pStatement->execute();
      $pStatement->close();
      $authorId = getAuthorId($authorName);
      addBook($bookTitle,$ISBN,$authorId,$imgURL);
    }

  } catch (Exception $e) {
    error_log($e->getMessage());
    echo $e->getMessage();
  }

 ?>

 <?php
   function addBook($bookTitle,$ISBN,$authorId,$imgURL){
     include('connection.php');
     $query = "INSERT INTO `book`(`title`, `isbn`,`author_id`,`imgURL`)
               VALUES (?,?,?,?)";
     $pStatement = $db->prepare($query);
     $pStatement->bind_param('siis',$bookTitle,$ISBN,$authorId,$imgURL);
     $pStatement->execute();

     if($pStatement->affected_rows > 0){
       echo "Book successfully added.";
     }else{
       throw new Exception('Book add fail.');
     }
     $pStatement->close();
   }
   function getAuthorId($authorName){
     include('connection.php');
     $query = "SELECT `id` FROM `author` WHERE `name` = ?";
     $pStatement = $db->prepare($query);
     $pStatement->bind_param('s',$authorName);
     $pStatement->execute();
     $result = $pStatement->get_result();
     if($result->num_rows > 0){ //there is existing author.
       $authorId = implode("",$result->fetch_assoc());
       $pStatement->close();
       return $authorId;
     }
   }
 ?>

 <div class="card-footer">
   <a class="btn btn-info" href="book-add.php">Go Back</a>
 </div>
</div>

<?php require_once('view-comp/footer.php') ?>

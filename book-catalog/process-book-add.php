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

    try{

      @ $db = new mysqli('127.0.0.1:3306', 'april', 'april', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

    $query = "SELECT `id` FROM `author` WHERE `name` = ?";
    $pStatement = $db->prepare($query);
    $pStatement->bind_param('s',$authorName);
    $pStatement->execute();
    $result = $pStatement->get_result();

    if($result->num_rows > 0)  
      $authorId = implode("",$result->fetch_assoc());
      $pStatement->close();
      addBook($bookTitle,$ISBN,$authorId,$imgURL);
    } else { 
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
    
     try{

      @ $db = new mysqli('127.0.0.1:3306', 'april', 'april', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

     $query = "INSERT INTO `book`(`title`, `isbn`,`author_id`,`imgURL`)
               VALUES (?,?,?,?)";
     $pStatement = $db->prepare($query);
     $pStatement->bind_param('siis',$bookTitle,$ISBN,$authorId,$imgURL);
     $pStatement->execute();

     if($pStatement->affected_rows > 0){
       echo "Book successfully added.";
     } else {
       throw new Exception('Book add fail.');
     }
     $pStatement->close();
   }
   function getAuthorId($authorName) {
     try{

      @ $db = new mysqli('127.0.0.1:3306', 'april', 'april', 'php_lesson_db');

      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }
      
     $query = "SELECT `id` FROM `author` WHERE `name` = ?";
     $pStatement = $db->prepare($query);
     $pStatement->bind_param('s',$authorName);
     $pStatement->execute();
     $result = $pStatement->get_result();

     if($result->num_rows > 0) { 
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
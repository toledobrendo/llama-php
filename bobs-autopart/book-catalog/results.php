
<?php require_once('view-comp/header.php');?>
<div class="card-header">
Book Results
</div>
<div class="card-body">

  <style>

  img{
    width: 200px;
    height: 300px;
  }

  </style>

<?php
  define('FIELDS', array(
    'author' => 'author.name',
    'title' => 'book.title',
    'isbn' => 'book.isbn',
    'imgPath' => 'book.imgPath'
  ));





  // define('IMAGES', array(
  //   'A Game of Thrones' => '../assets/images-for-book/a-game-of-thrones.png',
  //   'Java for Developers' => '../assets/images-for-book/JavaDev.png'
  // ));


  $searchType = $_POST['searchType'];
  $searchTerm = $_POST['searchTerm'];

  try {
    if (!$searchType || !$searchTerm) {
      throw new Exception('You have not entered search details. Please go back and try again.', 1);
    }

    // 127.0.0.1 = localhosl
    // Sir d po gumagana 'User Accounts sa phpmyadmin ko po baka po may sira
    @ $db = new mysqli('localhost', 'root', '', 'php_lesson_db');

    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Error: Could not connect to database. '.
        'Please try again later. '.$dbError, 1);
    }

    $query = 'SELECT author.name as author_name, book.title, book.isbn, book.imgPath
      FROM book
      INNER JOIN author
          ON author.id = book.author_id
      WHERE '.FIELDS[$searchType].' LIKE \'%'.$searchTerm.'%\';';

    // echo $query.'<br/>';

    $result = $db->query($query);

<<<<<<< HEAD
    //    $resultCount =  $result->num_rows;
    $resultCount =  $result->num_rows;
=======

   $resultCount =  $result->num_rows;
>>>>>>> 26fcc82305cf9f7beaff12bc11b64150b35dd03b

    echo '<p>Result for '.$searchType.' : '.$searchTerm.'</br>';
    echo 'Number of books found: '.$resultCount;

    echo '<div class="row">';

    for ($ctr = 0; $ctr < $resultCount; $ctr++) {
      $row = $result -> fetch_assoc();
    ?>
      <div class="card col-4 mx-1">
        <div class="card-body">
          <h6><?php echo $row['title'];?></h6>
          <?php echo "<img src='{$row['imgPath']}'>"; ?>
          <p>
            By: <?php echo $row['author_name'];?> <br/>
            <?php echo $row['isbn']?>
          </p>
        </div>
      </div>
    <?php
    }

    echo '</div>';
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>
<br/>
<a class="btn btn-secondary" href="index.php">Go Back</a>

</div>
<?php require_once('view-comp/footer.php');?>

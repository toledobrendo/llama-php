<?php require_once('view-comp/header.php');
  include 'dbconnection/connect.php';
 ?>
 <style>
 .flip-card {
   background-color: transparent;
   width: 250px;
   height: 250px;
   perspective: 1000px;
 }

 .flip-card-inner {
   position: relative;
   width: 100%;
   height: 100%;
   text-align: center;
   transition: transform 0.6s;
   transform-style: preserve-3d;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 }

 .flip-card:hover .flip-card-inner {
   transform: rotateY(180deg);
 }

 .flip-card-front, .flip-card-back {
   position: absolute;
   width: 100%;
   height: 100%;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
 }

 .flip-card-front {
   background-color: #bbb;
   color: black;
 }

 .flip-card-back {
   background-color: #dddfd4;
   color: white;
   transform: rotateY(180deg);
   padding-left: 20px;
   padding-right: 20px;
 }

 .glow {
   font-size: 24px;
   color: #fae596;
   text-align: center;
   -webkit-animation: glow 1s ease-in-out infinite alternate;
   -moz-animation: glow 1s ease-in-out infinite alternate;
   animation: glow 1s ease-in-out infinite alternate;
 }

 @-webkit-keyframes glow {
   from {
     text-shadow: 0 0 10px #fae596, 0 0 20px #fae596, 0 0 30px #3fb0ac, 0 0 40px #3fb0ac, 0 0 50px #3fb0ac, 0 0 60px #3fb0ac, 0 0 70px #3fb0ac;
   }

   to {
     text-shadow: 0 0 20px #fae596, 0 0 30px #173e43, 0 0 40px #173e43, 0 0 50px #173e43, 0 0 60px #173e43, 0 0 70px #173e43, 0 0 80px #173e43;
   }
 }
 </style>
<div class="card-header">
  Add Book Result
</div>
<div class="card-body">
  <?php

    $author_id = $_POST['authorName'];
    $bookName = $_POST['bookName'];
    $bookImage = $_POST['bookImage'];
    $isbn = $_POST['ISBN'];

    try{
      if (!$author_id) {
        throw new Exception('book details not complete. Please try again.');
      } else if (!$bookName) {
        throw new Exception('book details not complete. Please try again.');
      } else if (!$bookImage) {
        throw new Exception('book details not complete. Please try again.');
      } else if (!$isbn) {
        throw new Exception('book details not complete. Please try again.');
      }
      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Error: Could not connect to database. Please try again later.');
      }

      // Query by prepared statements
      $query = 'insert into book (title, isbn, author_id, imgSrc) values (?,?,?,?)';
      $stmt = $db->prepare($query);
      $stmt->bind_param("ssis", $bookName, $isbn, $author_id, $bookImage);
      $stmt->execute();

      $affectedRows = $stmt->affected_rows;
      if ($affectedRows > 0) {
        echo '<h1 class="glow">'.$affectedRows.' Book inserted into the database.</h1>';
      } else {
        throw new Exception('<h1 class="glow">Error: The Book was not added.</h1>');
      }

      $stmt->close();

    } catch (Exception $e) {
      error_log($e->getMessage());
      echo $e->getMessage();
    }

    $result = mysqli_query($db, "SELECT * FROM author where id = '$author_id'");
    while($row = mysqli_fetch_array($result)){
      $author_name = $row['name'];
    }
  ?>
  <br />
  <div class="card" align="center">
    <div>
      <br />
    </div>
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-3" style="border-style: solid; box-shadow: 10px 10px 5px grey;" height="300px" width="200px">
        <center>
          <!-- fixing the size of the image -->
          <img src="<?php echo $bookImage; ?>" alt="<?php echo $bookImage; ?>" height="300px" width="200px">
        </center>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <h2><strong><?php echo $bookName;?></strong></h2>
        <p>
          By: <?php echo $author_name;?> <br/>
          <?php echo $isbn;?>
        </p>
      </div>
    </div>
    <div>
      <br />
    </div>
  </div>

</div>
<div class="card-footer">
  <a class="btn btn-secondary" href="add-books.php">Back</a>
</div>
<?php require_once('view-comp/footer.php'); ?>

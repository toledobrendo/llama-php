<?php require_once('view-comp/header.php'); ?>

<?php
if (isset($_POST['submit'])) {

   $bookTitle = $_POST['bookTitle'];
   $authorName = $_POST['authorName'];

   echo '<div class="card-header">
            <b>Add Book Result</b>
         </div>';

   //not inside try catch because if we make this throw an 
   //exception, an uncaught error will be thrown at the finally
   //block when closing mysqli (since $db would be null and 
   //we can't close a null connection).
   if (empty($bookTitle) || empty($authorName)) {

      echo '<div class="m-4"> 
               Error: Book title OR author name were not provided.
               Please try again! 
            </div>';
   } else {
      try {
         @$db = new mysqli('127.0.0.1:3306', 'student', 'qwe123', 'php_lesson_db');
         $dbError = mysqli_connect_errno();
         if ($dbError) {
            throw new Exception('Error: Could not connect to database. 
            Please try again later.');
         }

         //Clean Strings
         $authorName = $db->real_escape_string($authorName);
         $bookTitle = $db->real_escape_string($bookTitle);

         //PRO: Query below merges checking and inserting for 1 trip to db instead of 2 
         //CON: $result is always true
         $query =
            'INSERT INTO author (name)
            SELECT * FROM (SELECT \'' . $authorName . '\') AS temp
            WHERE NOT EXISTS(
              SELECT name FROM author WHERE name = \'' . $authorName . '\'
            ) LIMIT 1';
         $result = $db->query($query);

         // $query =
         //    'INSERT INTO book (title, author_id) values (\'' . $bookTitle . '\',
         //    (SELECT id FROM author WHERE name = \'' . $authorName . '\'))';

         // $result = $db->query($query);

         $query = 'INSERT INTO book (title, author_id) values (?, (SELECT id FROM author WHERE name = \'' . $authorName . '\'))';
         $stmt = $db->prepare($query);
         $stmt->bind_param("s",$bookTitle);
         $stmt->execute();
         $affectedRows=$stmt->affected_rows;
         $stmt->close();
         
         if ($affectedRows>0) {
            echo '<div class="m-4">Book successfully added to Catalog!</div>';
         } else {
            throw new Exception('Error: The book you entered, <b>' . $bookTitle . ' by ' . $authorName . '</b> is already in the database!');
         }
      } catch (Exception $e) {
         echo '<div class="m-4">' . $e->getMessage() . '</div>';
      } finally {
         $db->close();
      }
   }
}
?>

<div class="card-header">
   Add Book
</div>
<div class="card-body">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-row">
         <div class="form-group col-md-4">
            <label for="bookTitle">Book Title:</label>
            <input type="text" class="form-control" id="bookTitle" name="bookTitle" /><br />
         </div>
         <div class="form-group col-md-8">
            <label for="authorName"> Author Name:</label>
            <input type="text" class="form-control" id="authorName" name="authorName" /><br />
         </div>
         <div class="form-group col-md-12">
            <button type="submit" name="submit" class="btn btn-primary float-right mt-3">Add to Catalog</button>
         </div>
      </div>
   </form>
</div>
<?php require_once('view-comp/footer.php'); ?>
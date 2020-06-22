<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
    <body>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <h6>Register</h6>
          </div>
          <div class="card-body">
            <?php
              $username = $_POST['username'];
              $password = $_POST['password'];

              try {
                if(!$username || !$password){
                  throw new Exception('Input is not complete');

                }

                @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_lesson_db');

                $dbError = mysqli_connect_errno();
                if ($dbError) {
                  throw new Exception('Could not connect to db');
                }

                $query = "insert into user_info (username, password, active) values (?,?,?)";
                $stmt = $db->prepare($query);
                $hasedPassword = hash('sha512', $password);
                $isActive = true;
                $stmt->bind_param("ssi", $username, $hasedPassword,$isActive);
                $stmt->execute();
                echo 'You have successfully registered a new account!';
                $stmt->close();

              } catch (Exception $e) {
                echo $e->getMessage();
              }

             ?>
          </div>
          <div class="card-footer">
            <a href="login.php" class="btn btn-secondary" >Go back</a>
          </div>
        </div>
      </div>


       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
       integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
       integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

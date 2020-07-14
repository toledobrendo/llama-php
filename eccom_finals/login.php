<?php

session_start();
@include 'view-comp/header.php';
@include 'includes/connect.php';

 if ($_SERVER['HTTPS'] != 'on') {
             header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            exit;
             }

if(isset($_SESSION['customer_sid']))
{
  header("location:browse-products.php");
  exit();
}
else{
?>

<html>

  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="login">
      <h1>Login</h1>

      <form method="post" action="router/approve-user.php">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input name="username" id="username" placeholder="Username" type="text" required>

        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input name="password" id="password" placeholder="Password" type="password" required>
        <input type="submit" value="Login">
      </form>
    </div>

  </body>
</html>
<?php
//header('Location: https://'.$_SERVER["localhost"].'//llama-php/llama-php/eccom_finals/browse-products.php');
}
?>

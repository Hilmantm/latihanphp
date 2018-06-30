<?php

  require 'functions.php';

  // check submit is click
  if( isset($_POST["submit"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // check username in database
    $checkUser = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
    if( mysqli_num_rows($checkUser) === 1 ) {
      // check password
      $row = mysqli_fetch_assoc($checkUser);
      if( password_verify($password, $row["password"]) ) {
        header("Location: index.php");
        exit;
      }
    }
    $err = true;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <style media="screen">
      p {
        color: red;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    <!-- judul -->
    <h1>Login Page</h1>

    <!-- form -->
    <?php if( isset($err) ) : ?>
      <p>Username / password salah gan!</p>
    <?php endif; ?>
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username : </label>
          <input type="text" name="username" id="username">
        </li>
        <li>
          <label for="password">Password : </label>
          <input type="password" name="password" id="password">
        </li>
        <li>
          <button type="submit" name="submit">login</button>
        </li>
      </ul>
    </form>
  </body>
</html>

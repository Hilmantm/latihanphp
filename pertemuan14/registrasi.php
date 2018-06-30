<?php

  require 'functions.php';

  // check if button register is isset
  if( isset($_POST["submit"]) ) {
    if( registrasi($_POST) > 0 ) {
      echo "<script>alert('User berhasil ditambahkan')</script>";
    }else {
      echo mysqli_error($connection);
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration page</title>
  </head>
  <body>
    <!-- Judul -->
    <h1>Registration page</h1>

    <!-- form -->
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username : </label>
          <input type="text" name="username" id="username" autocomplete="off" autofocus>
        </li>
        <li>
          <label for="password">Password : </label>
          <input type="password" name="password" id="password" autocomplete="off">
        </li>
        <li>
          <label for="passwordConfirm">Konfirmasi Password : </label>
          <input type="password" name="passwordConfirm" id="passwordConfirm" autocomplete="off">
        </li>
        <li>
          <button type="submit" name="submit">register</button>
        </li>
      </ul>
    </form>
  </body>
</html>

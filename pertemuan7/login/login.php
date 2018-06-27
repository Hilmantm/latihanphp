<?php
  // cek apakah submit sudah ditekan
  if( isset($_POST["submit"]) ) {
    // cek username dan Password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
      // jika benar, redirect ke halaman admin
      header("Location: admin.php");
      exit;
    } else {
      // tampilkan kesalahannya apabila salah
      $error = true;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman login</title>
  </head>
  <body>
    <h1>Ini halaman login</h1>

    <?php if( isset($error) ) : ?>
      <h1>Username / password salah</h1>
    <?php endif; ?>
    <ul>
      <form method="post">
        <li>
          <label for="username">Username : </label>
          <input id="username" type="text" name="username" autocomplete placeholder="username">
        </li>
        <li>
          <label for="password">Password : </label>
          <input id="password" type="password" name="password" autocomplete placeholder="password">
        </li>
        <li>
          <button type="submit" name="submit">login</button>
        </li>
      </form>
    </ul>
  </body>
</html>

<?php

  function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!!!";
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pertemuan4 - function</title>
  </head>
  <body>
    <h1><?= salam(); ?></h1>
  </body>
</html>

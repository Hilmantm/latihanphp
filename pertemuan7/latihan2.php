<?php
  // cek data get
  if( !isset($_GET["nama"]) ||
      !isset($_GET["kelas"]) ||
      !isset($_GET["jurusan"]) ||
      !isset($_GET["eskul"]) ||
      !isset($_GET["cita-cita"]) ||
      !isset($_GET["gambar"])
  ) :
    header("Location: latihan1.php"); // => redirect halaman
    exit;
  endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detail Siswa</title>
  </head>
  <body>

    <ul>
      <li><img src="img/<?= $_GET["gambar"] ?>" alt="foto hilman"></li>
      <li><?= $_GET["nama"] ?></li>
      <li><?= $_GET["kelas"] ?></li>
      <li><?= $_GET["jurusan"] ?></li>
      <li><?= $_GET["eskul"] ?></li>
      <li><?= $_GET["cita-cita"] ?></li>
    </ul>

    <a href="latihan1.php">kembali</a>

  </body>
</html>

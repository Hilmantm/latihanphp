<?php

  require 'functions.php';

  if( isset($_POST["submit"]) ) {

      // var_dump($_POST);var_dump($_FILES);die;

      // check if data successfully added to database
      if( addData($_POST) > 0 ) {
        echo "<script>alert('data berhasil ditambahkan'); document.location.href='index.php'</script>";
      }else {
        echo "<script>alert('data gagal ditambahkan'); document.location.href='index.php'</script>";
      }

  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add data</title>
  </head>
  <body>
    <!-- Title -->
    <h1>Tambah data siswa</h1>

    <!-- form element for add data siswa -->
    <form action="" method="post" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" placeholder="nama" autocomplete="off" id="nama" required>
        </li>
        <li>
          <label for="kelas">Kelas :</label>
          <input type="text" name="kelas" placeholder="kelas" autocomplete="off" id="kelas" required>
        </li>
        <li>
          <label for="jurusan">Jurusan :</label>
          <input type="text" name="jurusan" placeholder="jurusan" autocomplete="off" id="jurusan" required>
        </li>
        <li>
          <label for="cita-cita">Cita-cita :</label>
          <input type="text" name="cita_cita" placeholder="cita-cita" autocomplete="off" id="cita-cita" required>
        </li>
        <li>
          <label for="image">Image :</label>
          <input type="file" name="image" placeholder="image" autocomplete="off" id="image">
        </li>
        <li>
          <button type="submit" name="submit">submit</button>
        </li>
      </ul>
    </form>
  </body>
</html>

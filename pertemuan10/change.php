<?php

  require 'functions.php';

  // get id from URl
  $id = $_GET["id"];

  // get data siswa from functions query
  $dataSiswa = query("SELECT * FROM siswa WHERE id=$id");
  var_dump($dataSiswa);

  if( isset($_POST["submit"]) ) {

      // check if data successfully changed to database
      if( ubahData($_POST) > 0 ) {
        echo "<script>alert('data berhasil diubah'); document.location.href='index.php'</script>";
      }else {
        echo "<script>alert('data gagal diubah'); document.location.href='index.php'</script>";
      }

  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change data</title>
  </head>
  <body>
    <!-- Title -->
    <h1>Ubah data siswa</h1>

    <!-- form element for add data siswa -->
    <form action="" method="post">
      <ul>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" placeholder="nama" autocomplete="off" id="nama" required value="">
        </li>
        <li>
          <label for="kelas">Kelas :</label>
          <input type="text" name="kelas" placeholder="kelas" autocomplete="off" id="kelas" required value="">
        </li>
        <li>
          <label for="jurusan">Jurusan :</label>
          <input type="text" name="jurusan" placeholder="jurusan" autocomplete="off" id="jurusan" required value="">
        </li>
        <li>
          <label for="cita-cita">Cita-cita :</label>
          <input type="text" name="cita_cita" placeholder="cita-cita" autocomplete="off" id="cita-cita" required value="">
        </li>
        <li>
          <label for="image">Image :</label>
          <input type="text" name="image" placeholder="image" autocomplete="off" id="image" required value="">
        </li>
        <li>
          <button type="submit" name="submit">submit</button>
        </li>
      </ul>
    </form>
  </body>
</html>

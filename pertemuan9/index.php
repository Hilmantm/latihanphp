<?php

  require 'functions.php';
  $siswa = query("SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan9 - latihan1</title>
    <style media="screen">
      td, th {
        text-align: center;
      }
      a#tambahData {
        padding: 20px;
        background: #4c58e9;
        color: white;
        text-decoration: none;
      }
      table {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <!--Title  -->
    <h1>Tabel Daftar Siswa</h1>
    <a id="tambahData" href="add.php">tambah data</a><br>

    <!-- Table -->
    <table border="1" cellpadding="20">
      <tr>
        <th>No Urut</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>cita-cita</th>
        <th>image</th>
        <th>action</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($siswa as $hasil) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $hasil["nama"] ?></td>
          <td><?= $hasil["kelas"] ?></td>
          <td><?= $hasil["jurusan"] ?></td>
          <td><?= $hasil["cita_cita"] ?></td>
          <td><img src="img/<?= $hasil["image"] ?>" alt="foto <?= $hasil["nama"] ?>"></td>
          <td>
            <a href="">Ubah</a>
            <a href="hapus.php?id=<?= $hasil["id"] ?>">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
      </tr>
    </table>
  </body>
</html>

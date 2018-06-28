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
    </style>
  </head>
  <body>
    <!--Title  -->
    <h1>Tabel Daftar Siswa</h1>

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
            <button type="button" name="change">Ubah</button>
            <button type="button" name="change">Hapus</button>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
      </tr>
    </table>
  </body>
</html>

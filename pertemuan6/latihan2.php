<?php

  // array numeric => key -> angka
  // $siswa = [
  //   ["Hilman Taris Muttaqin", "X RPL 2", "RPL", "ORBIT", "Programmer"],
  //   ["Muhammad Widyan", "X RPL 4", "RPL", "PMR", "Programmer"],
  //   ["Ujang", "X RPL 3", "RPL", "Basket", "Pemain Volley"],
  //   ["Boni", "X TKJ 2", "TKJ", "ORBIT", "Hacker"]
  // ];

  // Associative array
  // key => string yang dibuat sendiri
  $siswa = [
            [
              "nama" => "Hilman Taris Muttaqin",
              "kelas" => "X RPL 2",
              "jurusan" => "RPL",
              "eskul" => "ORBIT",
              "cita-cita" => "Programmer",
              "gambar" => "hilman.jpg"
            ],
            [
              "nama" => "Muhammad Widyan",
              "kelas" => "X RPL 4",
              "jurusan" => "RPL",
              "eskul" => "PRM",
              "cita-cita" => "Programmer",
              "gambar" => "widyan.jpg"
            ],
            [
              "nama" => "David",
              "kelas" => "X RPL 3",
              "jurusan" => "RPL",
              "eskul" => "Basket",
              "cita-cita" => "Pemain Volley",
              "gambar" => "danu.jpg"
            ],
            [
              "nama" => "David",
              "kelas" => "X TKJ 2",
              "jurusan" => "TKJ",
              "eskul" => "ORBIT",
              "cita-cita" => "Hacker",
              "gambar" => "david.jpg"
            ],
            [
              "nama" => "Dedi",
              "kelas" => "X TITL 2",
              "jurusan" => "TITL",
              "eskul" => "Panel",
              "cita-cita" => "Petugas PLN",
              "gambar" => "dedi.jpg"
            ],
            [
              "nama" => "Jefri",
              "kelas" => "X TOI 2",
              "jurusan" => "TOI",
              "eskul" => "ORBIT",
              "cita-cita" => "Programmer",
              "gambar" => "jefri.jpg"
            ],
            [
              "nama" => "Jimmy",
              "kelas" => "X RPL 1",
              "jurusan" => "RPL",
              "eskul" => "Futsal",
              "cita-cita" => "Footsplayer",
              "gambar" => "jimmy.jpg"
            ],
            [
              "nama" => "Nada",
              "kelas" => "X RPL 1",
              "jurusan" => "RPL",
              "eskul" => "ORBIT",
              "cita-cita" => "Pengusaha",
              "gambar" => "nada.jpg"
            ],
            [
              "nama" => "Tiara",
              "kelas" => "X TKJ 2",
              "jurusan" => "TKJ",
              "eskul" => "Paskibra",
              "cita-cita" => "Pengusaha",
              "gambar" => "tiara.jpg"
            ]

          ];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pertemuan6 - latihan2</title>
  </head>
  <body>

    <h1>Daftar Siswa SMK N 4 Bandung</h1>

    <?php foreach( $siswa as $siswa ) : ?>
      <ul>
        <li><img src="img/<?= $siswa["gambar"] ?>" alt="foto <?= $siswa["nama"] ?>"></li>
        <li>Nama : <?= $siswa["nama"] ?></li>
        <li>Kelas : <?= $siswa["kelas"] ?></li>
        <li>Jurusa : <?= $siswa["jurusan"] ?></li>
        <li>Eskul : <?= $siswa["eskul"] ?></li>
        <li>Cita-cita : <?= $siswa["cita-cita"] ?></li>
      </ul>
    <?php endforeach; ?>

  </body>
</html>

<?php

  // Variable scope
  // $x = 20;
  //
  // function print_element() {
  //   global $x; // => untuk mengambil varible x diluar function
  //   echo $x;
  // }
  //
  // print_element();

  // Variable superglobals => sifat array associative
  // $_GET
  // $_POST
  // $_REQUEST
  // $_SESSION
  // $_COOKIE
  // $_SERVER
  // $_ENV

  // 1. $_GET
  // $_GET["nama"] = "Hilmantm";
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
              "nama" => "Danu",
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
    <title>pertemuan7 - latihan1</title>
  </head>
  <body>
    <ul>
      <?php foreach( $siswa as $siswa ) : ?>
        <li><a href="latihan2.php?
          nama=<?= $siswa["nama"] ?>&
          kelas=<?= $siswa["kelas"] ?>&
          jurusan=<?= $siswa["jurusan"] ?>&
          eskul=<?= $siswa["eskul"] ?>&
          cita-cita=<?= $siswa["cita-cita"] ?>&
          gambar=<?= $siswa["gambar"] ?>">
          <?= $siswa["nama"] ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>

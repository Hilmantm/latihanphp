<?php

  // Pertemuan 2 - PHP Dasar
  // Sintaks php

  // Standar outpur
  // echo, print
  // print_r -> mencetak array
  // var_dump -> melihat isi/informasi dari variable

  // echo "Hilman Taris Muttaqin <br>";
  // print "Hilmantm <br>";
  // print_r("Hilmantaris <br>");
  // var_dump("HilmanMuttaqin");

  // Penulisan sintaks PHP :
  // 1. HTML di dalam php
  // 2. PHP di dalam HTML

  // Variable dan tipe data :
  // variable
  // $nama = "Hilmantm";

  // Operator aritmatika
  // bisa mengandung + - * /
  // Contoh :
  // $x = 30;
  // $y = 10;
  // echo $y * $y . "<br>";

  // Penggabungan string / concationation / concat
  // menggunakan character .
  // $nama_depan = "Hilman";
  // $nama_belakang = " Taris";
  // echo $nama_depan . $nama_belakang;

  // Assignment
  // +=, -=, *=, /=, %=, .=
  // Contoh += :
  // $x = 3;
  // $x += 7;
  // echo $x;
  // Contoh .= :
  // $nama = "Hilman";
  // $nama .= " Taris";
  // echo $nama;

  // Perbandingan
  // <, >, <=, >=, ==, !=
  // Operator identitas
  // ===, !==

  // Logika
  // $$, ||, !

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Dasar - Pertemuan 2</title>
  </head>
  <body>

    <!-- HTML di dalam PHP -->
    <?php // echo "<h1>Hilman Taris Muttaqin</h1>" ?>

    <!-- PHP di dalam HTML -->
    <h1><?php // echo $nama; ?></h1>

  </body>
</html>

<?php

  // Untuk menampilkan hari, tanggal, bulan, dan tahun
  // echo date("l, d M Y");

  // Untuk menampilkan detik dari tanggal 1 Januari 1970
  // kesepakatan hari komputer
  // echo time();

  // mengecek hari menggunakan fungsi build-in date() dan time()
  // echo date("l", time()-60*60*24*80);

  // membuat sendiri detik yang sudah berlalu dari tangal 1 Januari 1970
  // mktime(0,0,0,0,0,0)
  // Urutan => jam, menit, detik, bulan, tanggal, tahun
  // echo mktime(0,0,0,4,8,2002);

  // mencari hari dari tanggal lahir
  // echo date("l", mktime(0,0,0,4,8,2002));

  // strtotime() => penggunaan lebih simple dari pada menggunakan mktime
  // echo date("l", strtotime("8 apr 2002"));
?>

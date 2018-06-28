<?php

  // connecting to database
  // parameter : host, username, pass, database
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "latihanphp";
  $connection = mysqli_connect($host, $user, $pass, $database);

  // query functions
  function query($query) {
    global $connection;
    // Get data from database
    $result = mysqli_query($connection, $query);
    // ada 2 cara :
    // 1. Cara manual :
    // $rows = [];
    // foreach( $result as $hasil ) {
    //  $rows[] = $hasil;
    // }
    // 2. Cara simple :
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
  }

  // add siswa to database
  function addData($data) {
    global $connection;

    // get data from input form
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $cita_cita = htmlspecialchars($data["cita_cita"]);
    $image = htmlspecialchars($data["image"]);

    // query insert
    $query = "INSERT INTO siswa VALUES ('', '$nama', '$kelas', '$jurusan', '$cita_cita', '$image')";
    mysqli_query($connection, $query);

    // return value if data successfully added to $database
    return mysqli_affected_rows($connection);

  }

  // delete siswa query
  function hapus($id) {
    global $connection;

    // delete query
    $query = "DELETE FROM siswa WHERE id=$id";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);

  }

<?php

  // connecting to database
  // parameter : host, username, pass, database
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "latihanphp";
  $connection = mysqli_connect($host, $user, $pass, $database);

  if( !$connection ) {
    die('Connect Error : ' . mysqli_connect_errno());
  }

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

  // replace data with new data
  function ubahData($data, $id) {
    global $connection;

    // data
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $cita_cita = htmlspecialchars($data["cita_cita"]);
    $image = htmlspecialchars($data["image"]);

    // replace data with new data
    $query = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan',
              cita_cita = '$cita_cita', image = '$image' WHERE id=$id";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
  }

  // search functions
  function searchObject($data) {
    global $connection;

    // query
    $query = "SELECT * FROM siswa WHERE
              nama LIKE '%$data%' OR
              kelas LIKE '%$data%' OR
              jurusan LIKE '%$data%' OR
              cita_cita LIKE '%$data%'";
    return query($query);

  }

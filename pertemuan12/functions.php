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
    // $image = htmlspecialchars($data["image"]); => masih menggunakan input text

    // upload gambar
    $image = uploadGambar();
    if( !$image ) {
      return false;
    }

    // query insert
    $query = "INSERT INTO siswa VALUES ('', '$nama', '$kelas', '$jurusan', '$cita_cita', '$image')";
    mysqli_query($connection, $query);

    // return value if data successfully added to $database
    return mysqli_affected_rows($connection);

  }

  // image upload function
  function uploadGambar() {
    global $nama;

    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $err = $_FILES["image"]["error"];
    $temp = $_FILES["image"]["tmp_name"];

    // check if no image uploaded
    if( $err === 4 ) {
      echo "<script>alert('upload gambar dulu gan!')</script>";
      return false;
    }

    // check if upload file is image
    $ekstension = ['png', 'jpg', 'jpeg'];
    $imageEkstension = explode('.', $fileName);
    $imageEkstension = strtolower(end($imageEkstension));
    if( !in_array($imageEkstension, $ekstension) ) {
      echo "<script>alert('upload gambar bukan file ya :)')</script>";
      return false;
    }

    // check if image not large
    if( $fileSize > 1000000 ) {
      echo "<script>alert('Ukuran terlalu besar :)')</script>";
      return false;
    }

    // check if image permission is full control

    // create new file name
    $uniqueName = uniqid();
    $uniqueName .= '.';
    $uniqueName .= $imageEkstension;

    // move image in temp to diretory
    move_uploaded_file($temp, 'img/' . $uniqueName);

    return $uniqueName;

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
    $oldImage = htmlspecialchars($data["oldImage"]);

    // check if user chose new image or not
    if( $_FILES["image"]["error"] === 4 ) {
      $image = $oldImage;
    }else {
      $image = uploadGambar();
    }

    // $image = htmlspecialchars($data["image"]);

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

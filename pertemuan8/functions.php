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

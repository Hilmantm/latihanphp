<?php

  $murid = [
    ["Hilman Taris Muttaqin", "X RPL 2", "RPL", "ORBIT", "Programmer"],
    ["Muhammad Widyan", "X RPL 4", "RPL", "PMR", "Programmer"],
    ["Fajri Ahmad N", "X RPL 2", "RPL", "ORBIT", "Programmer"]
  ];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pertemuan5 - latihan2</title>
  </head>
  <body>

    <?php foreach ($murid as $murid): ?>
      <ul>
        <li><?= $murid[0] ?></li>
        <li><?= $murid[1] ?></li>
        <li><?= $murid[2] ?></li>
        <li><?= $murid[3] ?></li>
        <li><?= $murid[4] ?></li>
      </ul>
    <?php endforeach; ?>

  </body>
</html>

<?php

  // Pengulangan :
  // 1. for
  // 2. while
  // 3. do... while
  // 4. foreach : pengulangan khusus untuk array

  // 1. for
  // for ($i = 0; $i < 5; $i++) {
  //     echo "Hello World <br>";
  // }

  // 2. while
  // $a = 0;
  // while ($a <= 10) {
  //   echo "Hello World <br>";
  //   $a++;
  // }

  // 3. do... while
  // $a = 11;
  // do {
  //   echo "Hello World <br>";
  // } while ($a <= 10);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pertemuan 3 - latihan 1</title>
    <style media="screen">
      .warna-baris {
        background: rgb(131, 26, 210);
      }
    </style>
  </head>
  <body>

    <table border="1" cellpadding="20" cellspacing="1">
      <!-- menggunakan system templating php -->
      <?php for( $i = 0; $i < 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
          <tr>
        <?php else : ?>
          <tr class="warna-baris">
        <?php endif; ?>
          <?php for( $j = 0; $j < 5; $j++ ) : ?>
            <td><?= "$i, $j"; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>

  </body>
</html>

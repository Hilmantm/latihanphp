<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pertemuan6 - latihan1</title>
    <style media="screen">
      .kotak {
        width: 70px;
        height: 70px;
        background: #BADA55;
        text-align: center;
        line-height: 70px;
        margin: 3px;
        float: left;
        transition: .5s;
      }
      .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
      }
      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>

    <?php

      $angka = [[1,2,3],[4,5,6],[7,8,9]];

    ?>

    <?php foreach( $angka as $a ) : ?>
      <?php foreach( $a as $b ) : ?>
        <div class="kotak">
          <?= $b ?>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>


  </body>
</html>

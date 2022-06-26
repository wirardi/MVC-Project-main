<?php 
include "APP/app-Control/control.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>80's Market</title>
    <style>
      td{
        color: black;
      }
    </style>
    <audio autoplay>
      <source src="beach-house-myth.mp3" type="audio/mp3"></source>
    </audio>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
      <center><h1>Welcome to 80's Market</h1><br><div class="display-block">Disi banyak barang Retro tahun 80an yang rekomend untuk dibeli</div><br><small>Hrga tertulis berupa harga pasar, kemungkinan harga asli akan lebih malah atau murah</small></center>



    <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse" style="border-color:black;">
        <tr>
          <th>Item Name</th>
          <th>Item Stock Ready</th>
          <th>Item Price (USD)</th>
          <th>Item Sold</th>
        </tr>
        </thead>
        <tbody style="color:white; border-color:white;background-color:wheat">
          <tr>
            <td scope="row"><?=$item1->nama?></td>
            <td><?=$item1->item?></td>
            <td><?=$item1->harga?></td>
            <td><?=$item1->sell?></td>
          </tr>
          <tr>
          <td><?=$item2->nama?></td>
            <td><?=$item2->item?></td>
            <td><?=$item2->harga?></td>
            <td><?=$item2->sell?></td>
          </tr>
        </tbody>
    </table>
    
  </body>
</html>
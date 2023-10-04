<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php

use produk as GlobalProduk;

   class produk {
      public $judul = "judul default";
      public $penulis = "penulis default";
      public $penerbit = "penerbit default";
      public $harga = 0;
   }

   $komik = new produk();
   $komik->judul = "Naruto";
   var_dump($komik);

   $game = new produk();
   $game->judul = "Uncharted";
   var_dump($game->judul); 

   ?>
</body>
</html>
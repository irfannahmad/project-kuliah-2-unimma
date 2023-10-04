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
   
   class produk {
      public $judul = "judul default";
      public $penulis = "penulis default";
      public $penerbit = "penerbit default";
      public $harga = 0;
   }

   $komik = new produk();
   $komik->judul = "Naruto";
   $komik->penulis = "Masashi Kishimoto";
   $komik->penebrit = "Shonen Jump";
   $komik->harga = 30000;

   echo "komik : $komik->penulis, $komik->penerbit";
   
   ?>
</body>
</html>
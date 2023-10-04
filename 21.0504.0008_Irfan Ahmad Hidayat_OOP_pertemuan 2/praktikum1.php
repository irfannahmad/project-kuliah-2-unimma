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
      public $judul, $penulis, $penerbit, $harga;
   }
   
   $komik = new produk();
   $game = new produk();

   var_dump($komik);
   var_dump($game);

   ?>
</body>
</html>
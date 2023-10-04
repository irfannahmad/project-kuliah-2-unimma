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

      public function sayHello() {
         return "Hello World!!";
      }
   }

   $komik = new produk();
   $komik->judul = "Naruto";
   $komik->penulis = "Masashi Kishimoto";
   $komik->penerbit = "Shonen Jump";
   $komik->harga = 0;

   echo "komik : $komik->penulis, $komik->penerbit";
   echo "<br>";
   echo $komik->sayHello();

   ?>
</body>
</html>
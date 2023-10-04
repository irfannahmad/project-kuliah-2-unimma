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
      public $judul = "penulis default";
      public $penulis = "penulis default";
      public $penerbit = "penerbit default";

      public function getLabel() {
         return "$this->judul, $this->penulis";
      }
   }
   
   $komik = new produk();
   $komik->judul = "Naruto";
   $komik->penulis = "Masashi Kishimoto";
   $komik->penerbit = "Shonen Jump";
   $komik->harga = 30000;

   echo "Komik : ".$komik->getlabel();
   echo "<br>";
   echo "Komik : $komik->penerbit, $komik->harga";

   ?>
</body>
</html>
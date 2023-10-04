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

      public function __construct() {
         echo "Hello World!!";
         echo "<br>";
      }
         
      public function getLabel() {
         return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
      }

      }

      $komik = new produk();
      $komik->judul = "Naruto";
      $komik->penulis = "Masashi Kishimoto";
      $komik->penerbit = "Shonen Jump";
      $komik->harga = 30000;

      $game = new produk();
      $game->judul = "Uncahrted";
      $game->penulis = "Neil Druckman";
      $game->penerbit = "Sony Computer";
      $game->harga = 250000;

      echo "Komik : ".$komik->getLabel();
      echo "<br>";
      echo "Game : " .$game->getLabel();
   
   ?>
</body>
</html>
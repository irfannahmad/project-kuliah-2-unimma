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
      public $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain;
      public function __construct($judulnya="judul default", $penulisnya="peulis default", $penerbitnya="penerbit default", $harganya = 0, $halamannya = 0, $mainnya = 0)
      {
         $this->judul = $judulnya;
         $this->penulis = $penulisnya;
         $this->penerbit = $penerbitnya;

         $this->harga = $harganya;
         $this->jmlhalaman = $halamannya;
         $this->waktumain = $mainnya;
      }
      public function getlabel() {
         return "$this->penulis, $this->penerbit";
      }
      public function getinfolengkap() {
         $data = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
         return $data; 
      }
   }

   class comics extends produk {
      public function getinfolengkap()
      {
         $data = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} halaman.";
         return $data;
      }
   }

   class gaming extends produk {
      public function getinfolengkap()
      {
         $data = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktumain} jam.";
         return $data;
      }
   }
   
   $komik = new comics ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
   $game = new gaming ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

   echo $komik->getinfolengkap();
   echo "<br>";
   echo $game->getinfolengkap();
   
   ?>
</body>
</html>
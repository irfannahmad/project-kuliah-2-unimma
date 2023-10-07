<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Penyakit</title>
</head>
<body>
   <h2>Tambah Gejala</h2>
   <form method="post" action="tambahpenyakitaksi.php">
      <table>
         <tr>
            <td>Kode Penyakit</td>
            <td><input type="text" name="kodePenyakit" id="kodePenyakit"></td>
         </tr>
         <tr>
            <td>Nama Penyakit</td>
            <td><input type="text" name="namaPenyakit" id="namaPenyakit"></td>
         </tr>
         <tr>
            <td>Solusi</td>
            <td><input type="text" name="solusi" id="solusi"></td>
         </tr>
         <tr>
            <td><input type="submit" name="simpan" id="Simpan"></td>
         </tr>
      </table>
   </form>
</body>
</html>
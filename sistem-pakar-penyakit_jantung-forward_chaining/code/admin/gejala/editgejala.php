<?php
include "../koneksi.php";
$id = $_GET['id'];
if ($id != "") {
   #menampilkan data
   $sql = "SELECT * FROM gejala WHERE idGejala='$id'";
   $qry = mysqli_query($koneksi, $sql)
      or die("SQL ERROR" . mysqli_error($koneksi));
   $data = mysqli_fetch_array($qry);
   #samakan dengan variabel form
   $id = $data['idGejala'];
   $edit_kdgejala = $data['kodeGejala'];
   $edit_gejala = $data['gejala'];
}
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Edit Data Gejala</title>
   <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>

<body>

   <div class="card col-md-5 mx-auto mt-5">
      <div class="card-body">
         <h4 class="text-center">Edit Data Gejala</h4>
         <form method="post" action="./editgejala2.php">
            <div class="form-group mb-2">
               <label for="kodeGejala">Kode Gejala :</label>
               <input type="text" class="form-control" id="kodeGejala" name="kodeGejala" value="<?php echo $edit_kdgejala; ?>">
               <input name="kodeGejala" type="hidden" id="kodeGejala" value="<?php echo $id; ?>">
            </div>
            <div class="form-group mb-2">
               <label for="edit_gejala">Nama Gejala :</label>
               <input type="text" class="form-control" id="edit_gejala" name="edit_gejala" value="<?php echo $edit_gejala; ?>">
            </div>
            <div class="">
               <button type="submit" name="simpan" id="simpan" class="btn btn-primary">Update</button>
               <a href="./gejala.php" type="button" class="btn btn-danger" name="batal" id="batal">Batal</a>
            </div>
         </form>
      </div>
   </div>

</body>

</html>
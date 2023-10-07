<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SISTEM PAKAR FORWARD CHAINING</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
   <?php
   include './admin/koneksi.php';
   session_start();
   ?>
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Konsultasi Penyakit Jantung</h1>
                     <br>
                     <a class="btn btn-primary" href="./index.php">
                        Kembali ke Beranda
                     </a>
                  </div><!-- /.col -->



               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-lg-10">
                     <div class="card">
                        <?php include './admin/koneksi.php'; ?>
                        <center>
                           <form class="col-6" method="POST" action="hasilkonsultasi.php">
                              <div style="overflow: scroll; height: 467px;">
                                 <?php
                                 $qry = "select * from gejala";
                                 $data = mysqli_query($koneksi, $qry);
                                 while ($d = mysqli_fetch_array($data)) {
                                 ?>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text">
                                             <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $d['kodeGejala'] ?>" name="<?= $d['idGejala'] ?>">
                                          </div>
                                       </div>
                                       <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $d['gejala'] ?>">
                                    </div>
                                 <?php
                                 }
                                 ?>
                              </div>
                              <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="submit">
                           </form>
                        </center>
                     </div>
                  </div>
                  <!-- /.col-md-6 -->
               </div>
               <!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->

   <!-- jQuery -->
   <script src="../../plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="../../dist/js/demo.js"></script>
</body>

</html>
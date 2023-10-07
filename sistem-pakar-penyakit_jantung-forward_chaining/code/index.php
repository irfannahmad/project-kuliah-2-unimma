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
   <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
         <div class="container">
            <a class="navbar-brand">
               <span class="brand-text font-weight-dark" 
                style="color: blue;">Forward Chaining</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
               <!-- Left navbar links -->
               
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
               <li class="nav-item">
                  <a class="" data-widget="control-sidebar" data-slide="true" href="./admin/login.php" role="button">
                     <i class="fas fa-user"> Login Admin</i>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- /.navbar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Sistem Pakar Penyakit Jantung</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
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
                        <div class="card-header">
                           <h5 class="card-title m-0">Hallooo Pengguna!</h5>
                        </div>
                        <div class="card-body">
                           <p class="card-text">Sistem Pakar Penyakit Jantung ini adalah sebuah sistem yang <br> dapat digunakan untuk mengdiagnosa penyakit jantung yang ada didalam tubuh manusia. <br> Diagnosa ini menggunakan metode forward chaining </p>
                           <a href="./konsultasi.php" class="btn btn-primary">Mulai Konsultasi</a>
                        </div>
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
<?php
session_start();
include "./koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>LOGIN ADMIN</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="" class="h1">LOGIN ADMIN</a>
         </div>
         <div class="card-body">

            <div class="login-box-msg"></div>

            <form action="./loginkoneksi.php" method="post">
               <div class="input-group mb-3">
                  <label for="username">Username :</label>
                  <input type="text" class="form-control" placeholder="Masukkan Username" name="username" id="username" autofocus="" required="">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-user"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <label for="password">
                     Password :
                  </label>
                  <input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password" required="" >
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- /.col -->
                  <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block social-auth-links text-center mt-2 mb-3">Masuk</button>
                  </div>
                  <div class="col-12 pt-2">
                     <a href="../index.php" class="text-danger">Kembali ke Beranda</a>
                  </div>

                  <!-- /.col -->
               </div>
            </form>
            <?php
                  if (isset($_GET['pesan'])) {
                  ?>
                     <p class="mt-0 text-center" style="color: red;">Username / Password Salah</p>
                  <?php }
                  ?>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="../plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SISTEM PAKAR</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
   <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>

         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">

         </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="index3.html" class="brand-link">
            <img src="../../img/jantungku.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SISTEM PAKAR</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="mb-3 d-flex">

            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                     <a href="../index.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../gejala/gejala.php" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                           Data Gejala
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../penyakitsolusi/penyakit.php" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                           Data Penyakit Dan Solusi
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../admin/rule/rule.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Rule Forward Chaining
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../logout.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                           Logout
                        </p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Rule Forward Chaining</h1>
                     <div>
                        <table border="1" cellpadding="10">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>P001</th>
                                 <th>P002</th>
                                 <th>P003</th>
                                 <th>P004</th>
                                 <th>P005</th>
                                 <th>P006</th>
                                 <th>P007</th>
                                 <th>P008</th>
                                 <th>P009</th>
                                 <th>P010</th>
                                 <th>P011</th>
                                 <th>P012</th>
                                 <th>P013</th>
                                 <th>P014</th>
                                 <th>P015</th>
                                 <th>P016</th>
                                 <th>P017</th>
                                 <th>P018</th>
                                 <th>P019</th>
                                 <th>P020</th>
                                 <th>P021</th>
                                 <th>P022</th>
                                 <th>P023</th>
                                 <th>P024</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              include "../koneksi.php";
                              $sql = "SELECT * FROM rule  ORDER BY id";
                              $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
                              $no = 0;
                              while ($data = mysqli_fetch_array($qry)) {
                                 $no++;
                              ?>
                                 <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['P001']; ?></td>
                                    <td><?php echo $data['P002']; ?></td>
                                    <td><?php echo $data['P003']; ?></td>
                                    <td><?php echo $data['P004']; ?></td>
                                    <td><?php echo $data['P005']; ?></td>
                                    <td><?php echo $data['P006']; ?></td>
                                    <td><?php echo $data['P007']; ?></td>
                                    <td><?php echo $data['P008']; ?></td>
                                    <td><?php echo $data['P009']; ?></td>
                                    <td><?php echo $data['P010']; ?></td>
                                    <td><?php echo $data['P011']; ?></td>
                                    <td><?php echo $data['P012']; ?></td>
                                    <td><?php echo $data['P013']; ?></td>
                                    <td><?php echo $data['P014']; ?></td>
                                    <td><?php echo $data['P015']; ?></td>
                                    <td><?php echo $data['P016']; ?></td>
                                    <td><?php echo $data['P017']; ?></td>
                                    <td><?php echo $data['P018']; ?></td>
                                    <td><?php echo $data['P019']; ?></td>
                                    <td><?php echo $data['P020']; ?></td>
                                    <td><?php echo $data['P021']; ?></td>
                                    <td><?php echo $data['P022']; ?></td>
                                    <td><?php echo $data['P023']; ?></td>
                                    <td><?php echo $data['P024']; ?></td>
                                 </tr><?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div><!-- /.col -->

               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
         <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
         </div>
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
</body>

</html>
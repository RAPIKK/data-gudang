<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Gudang Barang dan Surat Desnet</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
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
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/index3.html" class="brand-link">
                <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Pendataan DESNET</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="d-flex flex-column justify-content-start justify-items-center">
                    <div class="info">
                        <a href="<?php echo ('http://localhost:8080/login')?>" class="d-block">Profile  </a>
                    </div>
                    </li>
                        <li class="info">
                            <a href="<?php echo ('http://localhost:8080/login')?>" class="d-block">
                                <p class="text">Logout</p>
                            </a>
                        </li>
                </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Master</li>
                        <li class="nav-item">
                            <a href="<?= site_url('kategori/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-tasks text-primary"></i>
                                <p class="text">Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('satuan/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-angle-double-right text-warning"></i>
                                <p class="text">Satuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('barang/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-tasks text-danger"></i>
                                <p class="text">Barang</p>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                <?= $this->renderSection('judul') ?>
                            </h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <?= $this->renderSection('subjudul') ?>
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->renderSection('isi') ?>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; DESNET
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/dist/js/demo.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Web DKC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>dashboard/dist/css/adminlte.min.css">
  <!-- Upload Image Box -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/upload.css">
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
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('Home') ?>" class="nav-link">Home</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('Admin') ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Website DKC</span>
      </a>

      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <i class="fas fa-user fa-2x img-circle elevation-2"></i>
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin Web DKC</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Data Kegiatan 2021
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PWC 2021</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Tatil') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Napak Tilas 2021</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Gelas') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gelar Senja 2021</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Input
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Pramuka') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CRUD Pramuka</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Berita') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CRUD Berita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Kegiatan') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CRUD Kegiatan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin_Profil') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CRUD Profil</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
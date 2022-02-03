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
            <li class="nav-item">
                  <a href="<?= base_url('Admin-Dashboard') ?>" class="nav-link">
                  <i class="fas fa-tachometer-alt nav-icon"></i>
                  <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                  <a href="<?= base_url('Admin-Data-Kegiatan') ?>" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Data Kegiatan</p>
                </a>
            </li>
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
                  <a href="<?= base_url('Admin_PWC') ?>" class="nav-link">
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
                  <a href="<?= base_url('News-Page') ?>" class="nav-link">
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

  <div class="content-wrapper iframe-mode bg-dark" data-widget="iframe" data-auto-dark-mode="true" data-loading-screen="750">
    <div class="nav navbar navbar-expand-lg navbar-dark border-bottom border-dark p-0">
      <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Close</a>
      <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
      <ul class="navbar-nav" role="tablist">
      </ul>
      <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
      <a class="nav-link bg-dark" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
    </div>
    <div class="tab-content">
      <div class="tab-empty">
        <h2 class="display-4">Tidak Ada Halaman Yang Dipilih!</h2>
      </div>
      <div class="tab-loading">
        <div>
          <h2 class="display-4">Halaman Sedang loading <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>
    </div>
  </div>
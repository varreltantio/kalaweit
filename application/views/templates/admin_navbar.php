<div class="container-fluid">
  <div class="row">
    <!-- Main Sidebar -->
    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
      <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
          <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
            <div class="d-table m-auto">
              <img id="main-logo" class="d-inline-block align-top mr-1" width="90" src=<?= base_url() . "assets/logo.png"?>  alt="Shards Dashboard">
            </div>
          </a>
          <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
            <i class="material-icons">&#xE5C4;</i>
          </a>
        </nav>
      </div>
      <div class="nav-wrapper">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?= ($navbar == 'misi') ? 'active' : ''; ?>" href=<?=  base_url() . 'admin' ?> >
              <i class="material-icons">vertical_split</i>
              <span>Misi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($navbar == 'program') ? 'active' : ''; ?>" href=<?=  base_url() . 'admin/program' ?> >
              <i class="material-icons">table_chart</i>
              <span>Program</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- End Main Sidebar -->
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
      <div class="main-navbar sticky-top bg-white">
        <!-- Main Navbar -->
        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
          <div class="main-navbar-links w-100 d-none d-md-flex d-lg-flex">

          </div>
          <ul class="navbar-nav border-left flex-row ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle mr-2" src=<?= base_url() . "assets/img/admin/default.jpg"?> alt="User Avatar">
                <span class="d-none d-md-inline-block"><?= $admin['username'] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-small">
                <a class="dropdown-item text-danger" href=<?= base_url('auth/logout') ?>>
                  <i class="material-icons text-danger">&#xE879;</i> 
                  Logout 
                </a>
              </div>
            </li>
          </ul>
          <nav class="nav">
            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
              data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
              <i class="material-icons">&#xE5D2;</i>
            </a>
          </nav>
        </nav>
      </div>
      <!-- / .main-navbar -->
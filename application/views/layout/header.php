<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

  <link href="<?= base_url() ?>assets/libs/chartist/chartist.min.css" rel="stylesheet">

  <!-- Bootstrap Css -->
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="<?= base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="<?= base_url() ?>assets/images/logo-sm.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?= base_url() ?>assets/images/logo-dark.png" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="<?= base_url() ?>assets/images/logo-sm.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?= base_url() ?>assets/images/logo-light.png" alt="" height="18">
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>

        <div class="d-flex">
          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="fa fa-search"></span>
            </div>
          </form>

          <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="form-group m-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/images/users/user-4.jpg" alt="Header Avatar">
            </button>

            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href=""><i class="mdi mdi-account font-size-17 align-middle me-1"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pages-lock-screen.html"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="<?= base_url() ?>Login/logout"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
              <a href="<?= base_url() ?>Dashboard" class="waves-effect">
                <i class="ti-home"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="<?= base_url() ?>Category" class="waves-effect">
                <i class="ti-view-grid"></i>
                <span>Category</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url() ?>Setting/pincode" class="waves-effect">
                <i class="ti-view-grid"></i>
                <span>Pincode</span></a>
            </li>
            <li>
              <a href="<?= base_url() ?>Setting/banner" class="waves-effect">
                <i class="ti-view-grid"></i>
                <span>Banner</span></a>
            </li>

            <li>
              <a href="<?= base_url() ?>Product" class="waves-effect">
                <i class="ti-view-grid"></i>
                <span>Product</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->

    <div class="main-content">
      <div class="page-content">
        <!--  main-content start  -->

        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
        <!--  end main-content start  -->

        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url() ?>assets/libs/node-waves/waves.min.js"></script>


        <!-- Peity chart-->
        <script src="<?= base_url() ?>assets/libs/peity/jquery.peity.min.js"></script>

        <!-- Plugin Js-->
        <script src="<?= base_url() ?>assets/libs/chartist/chartist.min.js"></script>
        <script src="<?= base_url() ?>assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <script src="<?= base_url() ?>assets/js/pages/dashboard.init.js"></script>

        <script src="<?= base_url() ?>assets/js/app.js"></script>

</body>

</html>
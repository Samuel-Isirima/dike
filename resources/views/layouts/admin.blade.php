<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AsussXpress Admin | @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="stylesheet" href="../assets/css/package-page.css" />
    <link rel="shortcut icon" href="../assets/admin/images/favicon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/create-package">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Create New Package</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/packages">
                  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">View Packages</span>
                </a>
              </li>
    
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="/" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Go to Site</span></a>
              </div>
            </li>
          </ul>
        </nav>
       @yield('content')
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="/">AsussXpress </a>2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="/admin"> AsussXpress </a> Admin</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/admin/js/off-canvas.js"></script>
    <script src="../assets/admin/js/hoverable-collapse.js"></script>
    <script src="../assets/admin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>

<script>
  @if(Session::has('success'))
  		toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('info'))
  		toastr.info("{{ Session::get('info') }}");
  @endif
  @if(Session::has('warning'))
  		toastr.warning("{{ Session::get('warning') }}");
  @endif
  @if(Session::has('error'))
  		toastr.error("{{ Session::get('error') }}");
  @endif
</script>

</html>
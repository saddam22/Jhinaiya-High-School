<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('back_title')</title>
@yield('css_js')
</head>
<body>
<script src="{{ asset('back') }}/assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
     @include('back.inc.leftmenu')
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
       @include('back.inc.header')
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
       @yield('main-content')
        <!-- partial:partials/_footer.html -->
        @include('back.inc.footer')
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="{{ asset('back') }}/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('back') }}/assets/vendors/chartjs/Chart.min.js"></script>
  <script src="{{ asset('back') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="{{ asset('back') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('back') }}/assets/js/material.js"></script>
  <script src="{{ asset('back') }}/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('back') }}/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 
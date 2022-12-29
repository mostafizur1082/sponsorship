<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">
    
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/favicon.ico">
        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/daterangepicker/daterangepicker.css">
        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme Config Js -->
        <script src="{{asset('admin')}}/assets/js/hyper-config.js"></script>
        <!-- App css -->
        <link href="{{asset('admin')}}/assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
        <!-- Icons css -->
        <link href="{{asset('admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Begin page -->
        <div class="wrapper">
            
            <!-- ========== Topbar Start ========== -->
            @include('admin.layouts.header')
            <!-- ========== Topbar End ========== -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.sidebar')
            <!-- ========== Left Sidebar End ========== -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    @yield('content')
                    <!-- container -->
                </div>
                <!-- content -->
                <!-- Footer Start -->
                @include('admin.layouts.footer')
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Theme Settings -->
        @include('admin.layouts.themesettings')
        
        <!-- Vendor js -->
        <script src="{{asset('admin')}}/assets/js/vendor.min.js"></script>
        <!-- Daterangepicker js -->
        <script src="{{asset('admin')}}/assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/daterangepicker/daterangepicker.js"></script>
        
        <!-- Apex Charts js -->
        <script src="{{asset('admin')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
        <!-- Vector Map js -->
        <script src="{{asset('admin')}}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- Dashboard App js -->
        <script src="{{asset('admin')}}/assets/js/pages/demo.dashboard.js"></script>
        <!-- App js -->
        <script src="{{asset('admin')}}/assets/js/app.min.js"></script>
    </body>
</html>
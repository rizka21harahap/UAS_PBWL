<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('backend/images/ico/apple-icon-120.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('backend/images/ico/favicon.ico')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/vendors/css/extensions/tether.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/vendors/css/extensions/shepherd-theme-default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/vendors/css/tables/datatable/datatables.min.css')); ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/components.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/themes/dark-layout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/themes/semi-dark-layout.css')); ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/pages/dashboard-analytics.css')); ?>">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  <?php echo e(Auth::user()->theme == 1 ? 'dark-layout' : ''); ?> content-left-sidebar chat-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up"></span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    
                                </li>
                                
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                          <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                              <span class="user-name text-bold-600"><?php echo e(auth::user()->name); ?></span>
                              <span class="user-status"><?php echo e(auth::user()->auth); ?></span>
                            </div>
                            <span>
                              <img class="round" src="<?php echo e(asset('backend/images/profile/user.jpg')); ?>" alt="avatar" height="40" width="40">
                            </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <?php if(auth::user()->auth == 'Admin'): ?>
                              <a class="dropdown-item" href="<?php echo e(url('profile-admin', auth::user()->id )); ?>"><i class="feather icon-user"></i>Profile
                              </a>
                            <?php else: ?>
                              <a class="dropdown-item" href="<?php echo e(url('profile-karyawan', auth::user()->id )); ?>"><i class="feather icon-user"></i>Profile
                              </a>
                              <a class="dropdown-item" href="<?php echo e(url('karyawan/setting' )); ?>"><i class="feather icon-settings"></i>Settings
                              </a>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Logout">
                                <i class="feather icon-power"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo e(url('home')); ?>">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Laundry</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>"><a href="<?php echo e(url('home')); ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>

                
                    <?php if(auth::user()->auth == "Admin"): ?>
                        <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="User">Data User</span></a>
                            <ul class="menu-content">
                              <li class="nav-item <?php echo e((request()->is('karyawan')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('karyawan.index')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Karyawan</span></a>
                              </li>
                              <li class="nav-item <?php echo e((request()->is('customer')) ? 'active' : ''); ?>">
                                <a href="<?php echo e(url('customer')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Customer</span></a>
                              </li>
                            </ul>
                        </li>

                        

                        <li class="nav-item <?php echo e((request()->is('transaksi')) ? 'active' : ''); ?>">
                          <a href="<?php echo e(route('transaksi.index')); ?>"><i class="feather icon-shopping-cart"></i><span class="menu-item" data-i18n="List">Transaksi</span></a>
                        </li>


                        <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="User">Data Finance</span></a>
                          <ul class="menu-content">
                            <li class="nav-item <?php echo e((request()->is('data-finance')) ? 'active' : ''); ?>">
                              <a href="<?php echo e(url('data-finance')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Finance</span></a>
                            </li>
                            <li class="nav-item <?php echo e((request()->is('data-harga')) ? 'active' : ''); ?>">
                              <a href="<?php echo e(url('data-harga')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Harga Laundry</span></a>
                            </li>
                          </ul>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="User">Other</span></a>
                          <ul class="menu-content">
                            <li class="nav-item <?php echo e((request()->is('settings')) ? 'active' : ''); ?>">
                              <a href="<?php echo e(url('settings')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Setting</span></a>
                            </li>
                          </ul>
                        </li>
                    

                    
                    <?php elseif(auth::user()->auth == "Karyawan"): ?>
                        <li class=" nav-item"><a href="#"><i class="feather icon-layers"></i><span class="menu-title" data-i18n="User">Data Transaksi</span></a>
                            <ul class="menu-content">
                                <li class="nav-item <?php echo e((request()->is('pelayanan')) ? 'active' : ''); ?>">
                                  <a href="<?php echo e(route('pelayanan.index')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Order Masuk</span></a>
                                </li>
                                <li class="nav-item <?php echo e((request()->is('add-order')) ? 'active' : ''); ?>">
                                  <a href="<?php echo e(url('add-order')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Tambah Order</span></a>
                                </li>
                                <li class="nav-item <?php echo e((request()->is('list-customer')) ? 'active' : ''); ?>">
                                  <a href="<?php echo e(url('list-customer')); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Data Customer</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?php echo e(url('/laporan')); ?>"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Dashboard">Laporan</span></a>
                        </li>
                         <li class="nav-item"><a href="<?php echo e(url('/')); ?>" target="_blank"><i class="feather icon-square"></i><span class="menu-title" data-i18n="Dashboard">Frontend</span></a>
                        </li>
                    <?php endif; ?>
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://www.instagram.com/rizkaharahapp_/" target="_blank">Rizka Aulia Harahap,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Build With <i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo e(asset('backend/vendors/js/vendors.js')); ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo e(asset('backend/vendors/js/charts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/extensions/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/extensions/shepherd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/datatables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/js/tables/datatable/datatables.bootstrap4.min.js')); ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(asset('backend/js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/core/app.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/scripts/components.js')); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('backend/js/scripts/datatables/datatable.js')); ?>"></script>
    <!-- END: Page JS-->
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
<!-- END: Body-->

</html><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/layouts/backend.blade.php ENDPATH**/ ?>
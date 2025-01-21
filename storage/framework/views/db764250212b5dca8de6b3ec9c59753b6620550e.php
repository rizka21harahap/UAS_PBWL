<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/plugins/bootstrap3/css/bootstrap.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/plugins/animate/animate.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/css/forum/style.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/css/forum/style-responsive.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('frontend/css/forum/theme/default.css')); ?>" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo e(asset('frontend/plugins/pace/pace.min.js')); ?>"></script>

    <!-- ================== END BASE JS ================== -->
    <style type="text/css">
        body {
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <!-- begin #header -->
    <?php echo $__env->yieldContent('header'); ?>
    <!-- end #header -->

    <!-- begin search-banner -->
    <div class="search-banner has-bg">
       <?php echo $__env->yieldContent('banner'); ?>
    </div>
    <!-- end search-banner -->

    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container-fluid">
          <div id="app">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->

    <!-- begin #footer -->
    <?php echo $__env->yieldContent('footer'); ?>
    <!-- end #footer -->

    <!-- begin #footer-copyright -->
    <div class="footer-copyright">
        <div class="container">
            &copy; <?php echo date("Y") ?> Build With <i class="fa fa-heart" style="color:red"></i> - <a href="https://www.instagram.com/rizkaharahapp_/" target="_blank" style="text-decoration:none">Rizka Aulia Harahap</a>
        </div>
    </div>
    <!-- end #footer-copyright -->
	<!-- ================== BEGIN BASE JS ================== -->
  <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
	<script src="<?php echo e(asset('frontend/plugins/jquery/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/plugins/bootstrap3/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/plugins/js-cookie/js.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/forum/apps.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/swal/sweetalert2.all.min.js')); ?>"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	    });
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/layouts/frontend.blade.php ENDPATH**/ ?>
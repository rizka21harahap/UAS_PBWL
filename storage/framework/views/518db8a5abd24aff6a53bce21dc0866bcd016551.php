<div id="header" class="header navbar navbar-default navbar-fixed-top">
  <!-- begin container -->
  <div class="container">
      <!-- begin navbar-header -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
              <span class="navbar-logo"></span>
              <span class="brand-text">
                  <?php echo e($setpage->judul != NULL ? $setpage->judul : 'Judul Disini'); ?>

              </span>
          </a>
      </div>
      <!-- end navbar-header -->
      <!-- begin #header-navbar -->
      <div class="collapse navbar-collapse" id="header-navbar">
          <ul class="nav navbar-nav navbar-right">
              <?php if(auth()->guard()->check()): ?>
              <li> <a href="<?php echo e(url('/home')); ?>">Welcome, <?php echo e(Auth::user()->name); ?></a> </li>
              <?php else: ?>
              <li><a href="<?php echo e(route('login')); ?>">Masuk</a></li>
              <?php endif; ?>
          </ul>
      </div>
      <!-- end #header-navbar -->
  </div>
  <!-- end container -->
</div><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/frontend/header.blade.php ENDPATH**/ ?>
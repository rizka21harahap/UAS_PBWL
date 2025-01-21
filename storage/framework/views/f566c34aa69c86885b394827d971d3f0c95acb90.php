<?php $__env->startSection('title','Upsss !'); ?>
<?php $__env->startSection('content'); ?>
<section class="row flexbox-container">
    <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
        <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
            <div class="card-content">
                <div class="card-body text-center">
                    <img src="<?php echo e(asset('backend/images/pages/404.png')); ?>" class="img-fluid align-self-center" alt="branding logo">
                    <h1 class="font-large-2 my-1">404 - Page Not Found!</h1>
                    <p class="p-2">
                        Sepertinya halaman yang kamu cari tidak bisa kami jangkau.
                    </p>
                    <a class="btn btn-primary btn-lg mt-2" href="/">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/errors/404.blade.php ENDPATH**/ ?>
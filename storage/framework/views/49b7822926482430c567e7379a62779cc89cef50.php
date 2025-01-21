
    <div class="bg-cover">
    <img src="<?php echo e(asset('frontend/img/banner.jpg')); ?>" alt="" />
    </div>
    <!-- end bg-cover -->
    <!-- begin container -->
    <div class="container">
        <h3>Lacak Status Laundry Kamu Disini...</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        <?php echo $__env->make('frontend.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/frontend/banner.blade.php ENDPATH**/ ?>
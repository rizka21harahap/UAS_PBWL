<?php $__env->startSection('title','Selamat Datang'); ?>
<?php $__env->startSection('header'); ?>
  <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('banner'); ?>

    <?php echo $__env->make('frontend.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
  <?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <a href="https://wa.me/<?php echo e($setpage->whatsapp); ?>" target="blank_">
    <img src="<?php echo e(asset('frontend/img/wa.png')); ?>" class="wabutton" alt="WhatsApp-Button">
  </a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  $(document).on('click', '.search-btn', function(e){
      _curr_val = $('#search_status').val();
      $('#search_status').val(_curr_val + $(this).html());
  });

  $(document).on('click', '#search-btn', function (e) {
      var search_status = $("#search_status").val();
      $.get('pencarian-laundry',{'_token': $('meta[name=csrf-token]').attr('content'),search_status:search_status}, function(resp){
            if (resp != 0) {
                  $(".modal_status").show();
                  $("#customer").html(resp.customer);
                  $("#tgl_transaksi").html(resp.tgl_transaksi);
                  $("#status_order").html(resp.status_order);
            }else{
                swal({html: "No Invoice Tidak Terdaftar!"})
            }
      });
  });
  function close_dlgs(){
        $(".modal_status").hide();
        $("#search_status").val("");
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/frontend/index.blade.php ENDPATH**/ ?>
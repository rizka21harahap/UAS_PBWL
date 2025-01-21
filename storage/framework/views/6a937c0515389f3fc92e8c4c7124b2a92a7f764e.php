<?php $__env->startSection('title','Tambah Data Order'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(@$cek_harga->user_id == !null || @$cek_harga->user_id == Auth::user()->id): ?>

    <?php if($message = Session::get('error')): ?>
      <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
      </div>
    <?php endif; ?>

    <div class="card card-outline-info">
      <div class="card-header">
          <h4 class="card-title">Form Tambah Data Order
              <a href="<?php echo e(url('list-customer-add')); ?>" class="btn btn-danger">+ Customer Baru</a>
          </h4>
      </div>
      <div class="card-body">
        
        <?php if($cek_customer != 0): ?>
          <form action="<?php echo e(route('pelayanan.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-body">
              <div class="row p-t-20">
                  <div class="col-md-3">
                      <div class="form-group has-success">
                          <label class="control-label">Nama Customer</label>
                          <select name="customer_id" id="customer_id" class="form-control select2 <?php $__errorArgs = ['customer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                              <option value="">-- Pilih Customer --</option>
                              <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($customers->id); ?>"><?php echo e($customers->nama); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['customer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group has-success">
                          <label class="control-label">No Transaksi</label>
                          <input type="text" name="invoice" value="<?php echo e($newID); ?>" class="form-control <?php $__errorArgs = ['invoice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly>
                          <?php $__errorArgs = ['invoice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group has-success">
                        <label class="control-label">Berat Pakaian</label>
                        <input type="text" class="form-control form-control-danger <?php $__errorArgs = ['kg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kg" placeholder="Berat Pakaian" autocomplete="off" required>
                        <?php $__errorArgs = ['kg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group has-success">
                        <label class="control-label">Status Payment</label>
                        <select class="form-control custom-select <?php $__errorArgs = ['status_payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="status_payment" required>
                            <option value="">-- Pilih Status Payment --</option>
                            <option value="Pending">Belum Dibayar</option>
                            <option value="Success">Sudah Dibayar</option>
                        </select>
                        <?php $__errorArgs = ['status_payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
              </div>

              <div class="row">

                <div class="col-md-3">
                    <div class="form-group has-success">
                        <label class="control-label">Jenis Pembayaran</label>
                        <select class="form-control custom-select <?php $__errorArgs = ['jenis_pembayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jenis_pembayaran" required>
                          <option value="">-- Pilih Jenis Pembayaran --</option>
                          <option value="Tunai">Tunai</option>
                          <option value="Transfer">Transfer</option>
                        </select>
                        <?php $__errorArgs = ['jenis_pembayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                <div class="col-md-3">
                  <div class="orm-group has-success">
                      <label class="control-label">Pilih Pakaian</label>
                      <select id="id" name="harga_id" class="form-control select2 <?php $__errorArgs = ['harga_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                          <option value="">-- Jenis Pakaian --</option>
                          <?php
                          $jenis = App\Models\harga::select('id','jenis')->where('status','1')->where('user_id',Auth::user()->id)->get();
                          ?>
                          <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($jenis->id); ?>"><?php echo e($jenis->jenis); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <?php $__errorArgs = ['harga_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
                <div class="col-md-2">
                    <span id="select-hari"></span>
                </div>
                <div class="col-md-2">
                    <span id="select-harga"></span>
                </div>
                <div class="col-md-2">
                  <div class="form-group has-success">
                      <label class="control-label">Disc</label>
                      <input type="number" name="disc" placeholder="Tulis Disc" class="form-control <?php $__errorArgs = ['disc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                      <?php $__errorArgs = ['disc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
              </div>

                <input type="hidden" name="tgl">
                <!--/row-->
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
              <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
            </div>
          </form>
        <?php else: ?>
          <div class="col text-center">
            <h2 class="text-danger">
              Data Customer Masih Kosong !
            </h2>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php else: ?>
      <div class="card">
        <div class="col text-center">
          <img src="<?php echo e(asset('backend/images/pages/empty.svg')); ?>" style="height:500px; width:100%; margin-top:10px">
          <h2 class="mt-1">Data Harga Kosong / Tidak Aktif !</h2>
          <h4>Mohon hubungi Administrator :)</h4>
        </div>
      </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    // Filter Harga
    $(document).ready(function() {
       var id = $("#id").val();
            $.get('<?php echo e(Url("listhari")); ?>',{'_token': $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
            $("#select-hari").html(resp);
            $.get('<?php echo e(Url("listharga")); ?>',{'_token': $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
            $("#select-harga").html(resp);
        });
        });
    });

    $(document).on('change', '#id', function (e) {
      var id = $(this).val();
      $.get('<?php echo e(Url("listhari")); ?>',{'_token': $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
        $("#select-hari").html(resp);
      });
    });

    $(document).on('change', '#id', function (e) {
        var id = $(this).val();
        $.get('<?php echo e(Url("listharga")); ?>',{'_token': $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
            $("#select-harga").html(resp);
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/karyawan/transaksi/addorder.blade.php ENDPATH**/ ?>
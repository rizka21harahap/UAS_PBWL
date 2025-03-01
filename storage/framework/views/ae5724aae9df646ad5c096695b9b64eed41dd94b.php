<?php $__env->startSection('title','Admin - Settings'); ?>
<?php $__env->startSection('header','Settings'); ?>
<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
  </div>
<?php elseif($message = Session::get('error')): ?>
  <div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
  </div>
<?php endif; ?>
<div class="content-body">
  <section>
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
          <li class="nav-item">
              <a class="nav-link d-flex py-75 active" id="pill-general" data-toggle="pill" href="#vertical-general" aria-expanded="true">
                  <i class="feather icon-globe mr-50 font-medium-3"></i>
                  General
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link d-flex py-75" id="pill-target" data-toggle="pill" href="#vertical-target" aria-expanded="false">
                  <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                  Target Laundry
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link d-flex py-75" id="pill-theme" data-toggle="pill" href="#vertical-theme" aria-expanded="false">
                  <i class="feather icon-feather mr-50 font-medium-3"></i>
                  Theme
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link d-flex py-75" id="pill-bank" data-toggle="pill" href="#vertical-bank" aria-expanded="false">
                  <i class="feather icon-credit-card mr-50 font-medium-3"></i>
                  Data Bank
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link d-flex py-75" id="pill-notif" data-toggle="pill" href="#vertical-notif" aria-expanded="false">
                  <i class="feather icon-feather mr-50 font-medium-3"></i>
                  Notifications
              </a>
          </li>

        </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="tab-content">
                
                <div role="tabpanel" class="tab-pane active" id="vertical-general" aria-labelledby="pill-general" aria-expanded="true">
                  <form action="<?php echo e(route('seting-page.update', $setpage->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="judul">Judul Website</label>
                            <input type="text" class="form-control" name="judul" value="<?php echo e($setpage->judul); ?>" placeholder="Judul Website" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="tentang">Tentang</label>
                            <textarea name="tentang" class="form-control" rows="3" placeholder="Tentang Website"> <?php echo e($setpage->tentang); ?> </textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="intagram">Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="<?php echo e($setpage->instagram); ?>" placeholder="Username Instagram">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="<?php echo e($setpage->facebook); ?>" placeholder="Username Facebook">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="<?php echo e($setpage->twitter); ?>" placeholder="Username Twitter">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="WhatsApp">WhatsApp</label>
                            <input type="text" name="whatsapp" class="form-control" value="<?php echo e($setpage->whatsapp); ?>" placeholder="Nomor WhatsApp">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="No Telp">No Telp</label>
                            <input type="number" name="no_telp" class="form-control" value="<?php echo e($setpage->no_telp); ?>" placeholder="Nomor Telp">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control"value="<?php echo e($setpage->email); ?>" placeholder="Email">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="Image Hero">Image Hero</label>
                            <input type="file" name="img_hero" class="form-control" placeholder="Username No Telp">
                            <small class="text-warning">Recomendes Image size 1200p x 400p</small>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-start">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

                
                <div class="tab-pane fade" id="vertical-target" role="tabpanel" aria-labelledby="pill-target" aria-expanded="false">
                  <form action="<?php echo e(route('set-target.update', Auth::user()->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="Target Hari">Target per-hari</label>
                            <input type="number" class="form-control" name="target_day" value="<?php echo e($settarget->target_day); ?>" placeholder="Target Hari" required>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="Target Bulan">Target per-bulan</label>
                            <input type="number" class="form-control" name="target_month" value="<?php echo e($settarget->target_month); ?>" placeholder="Target Bulan" required>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-4">
                        <div class="form-group">
                          <div class="controls">
                            <label for="Target Tahun">Target per-tahun</label>
                            <input type="number" class="form-control" name="target_year" value="<?php echo e($settarget->target_year); ?>" placeholder="Target Tahun" required>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-start">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

                
                <div class="tab-pane fade" id="vertical-theme" role="tabpanel" aria-labelledby="pill-theme" aria-expanded="false">
                  <form action="<?php echo e(route('setting-theme.update', Auth::id())); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                      <div class="row">
                        <h5 class="m-1">Theme Dark <i class=" <?php echo e(Auth::user()->theme == 1 ? 'fa fa-check' : ''); ?> " style="color: chartreuse"></i> </h5>
                        <div class="col-12 mb-1">
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="theme" <?php echo e(Auth::user()->theme == 1 ? 'checked' : ''); ?> value="1" id="theme">
                                <label class="custom-control-label mr-1" for="theme"></label>
                                <span class="switch-label w-100">Aktifkan Jika Ingin Menggunakan Theme Dark</span>
                            </div>
                        </div>

                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-start">
                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                              changes</button>
                          <button type="reset" class="btn btn-outline-warning">Cancel</button>
                        </div>
                      </div>
                  </form>
                </div>

                
                <div class="tab-pane fade" id="vertical-bank" role="tabpanel" aria-labelledby="pill-bank" aria-expanded="false">
                  <form action="" method="post">
                  <?php echo csrf_field(); ?>
                    <div class="row">
                      <?php if(Auth::User()->bank == NULL): ?>
                        <div class="col-md-4">
                          <a data-toggle="modal" data-target="#addpayment">
                            <div class="card bg-primary">
                              <div class="card-body">
                                <div class="card-title text-white">
                                  Tambah Akun Bank
                                </div>
                                <div class="text-center text-white">
                                  <i class="feather icon-plus"></i>
                                </div> <br>
                              </div>
                            </div>
                          </a>
                        </div>
                      <?php else: ?>
                        <?php $__currentLoopData = $databank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-4">
                            <a data-toggle="modal" data-target="#editpayment">
                              <div class="card bg-danger">
                                <div class="card-body text-center">
                                  <div class="card-title text-white">
                                    <?php echo e($bank->nama_bank); ?>

                                  </div>
                                  <span class="text-white"><?php echo e($bank->no_rekening); ?></span> <br>
                                  <small class="text-white"><?php echo e($bank->nama_pemilik); ?></small>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-4">
                          <a data-toggle="modal" data-target="#addpayment">
                            <div class="card bg-primary">
                              <div class="card-body">
                                <div class="card-title text-white">
                                  Tambah Akun Bank
                                </div>
                                <div class="text-center text-white">
                                  <i class="feather icon-plus"></i>
                                </div> <br>
                              </div>
                            </div>
                          </a>
                        </div>
                      <?php endif; ?>

                    </div>
                  </form>
                </div>

                
                <div class="tab-pane fade" id="vertical-notif" role="tabpanel" aria-labelledby="pill-notif" aria-expanded="false">
                  <form action="<?php echo e(route('set-notif.update', Auth::id())); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                      <div class="row">
                        <h5 class="m-1">Email</h5>
                        <div class="col-12 mb-1">
                          <div class="custom-control custom-switch custom-control-inline">
                              <input type="checkbox" class="custom-control-input" name="email" <?php echo e($setnotif->email == 1 ? 'checked' : '0'); ?> value="1" id="email">
                              <label class="custom-control-label mr-1" for="email"></label>
                              <span class="switch-label w-100">Aktifkan Jika Ingin Menggunakan Email Notification</span>
                          </div>
                        </div>

                         <h5 class="m-1">Telegram Order Masuk</h5>
                        <div class="col-12 mb-1">
                          <div class="custom-control custom-switch custom-control-inline">
                              <input type="checkbox" class="custom-control-input" name="telegram_order_masuk" <?php echo e($setnotif->telegram_order_masuk == 1 ? 'checked' : '0'); ?> value="1" id="telegram_order_masuk">
                              <label class="custom-control-label mr-1" for="telegram_order_masuk"></label>
                              <span class="switch-label w-100">Aktifkan Jika Ingin Mendapatkan Notifikasi Setiap Order Masuk</span>
                          </div>
                        </div>

                         <h5 class="m-1">Telegram Order Keluar</h5>
                        <div class="col-12 mb-1">
                          <div class="custom-control custom-switch custom-control-inline">
                              <input type="checkbox" class="custom-control-input" name="telegram_order_selesai" <?php echo e($setnotif->telegram_order_selesai == 1 ? 'checked' : '0'); ?> value="1" id="telegram_order_selesai">
                              <label class="custom-control-label mr-1" for="telegram_order_selesai"></label>
                              <span class="switch-label w-100">Aktifkan Jika Ingin Mendapatkan Notifikasi Setiap Order Selesai</span>
                          </div>
                        </div>
                        

                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-start">
                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                              changes</button>
                          <button type="reset" class="btn btn-outline-warning">Cancel</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo $__env->make('modul_admin.setting.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  <?php if(count($errors) > 0): ?>
    $(function() {
      $('#addpayment').modal('show');
    });
  <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/modul_admin/setting/index.blade.php ENDPATH**/ ?>
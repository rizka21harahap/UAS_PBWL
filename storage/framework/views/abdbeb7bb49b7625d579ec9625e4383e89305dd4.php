<?php $__env->startSection('title','Admin - Data Harga Laundri'); ?>
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
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Data Harga Laundry Per-Cabang
                        <a class="btn btn-primary" style="color:white">Tambah</a>
                    </h4>
                    <div class="table-responsive m-t-0">
                        <table id="myTable" class="table display table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jenis</th>
                                    <th>Lama</th>
                                    <th>Kg</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php $__currentLoopData = $harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no); ?></td>
                                    <td><?php echo e($item->jenis); ?></td>
                                    <td><?php echo e($item->hari); ?> Hari</td>
                                    <td><?php echo e($item->kg); ?> Kg</td>
                                    <td>Rp. <?php echo e($item->harga); ?></td>
                                    <td>
                                        <?php if($item->status == "1"): ?>
                                            <span class="label label-primary">Aktif</span>
                                        <?php else: ?>
                                        <span class="label label-warning">Tidak Aktif</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($item->nama_cabang); ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-success" data-toggle="modal" data-id="<?php echo e($item->id); ?>" data-id-jenis="<?php echo e($item->jenis); ?>" data-id-kg="<?php echo e($item->kg); ?>" data-id-harga="<?php echo e($item->harga); ?>" data-id-hari="<?php echo e($item->hari); ?>" data-id-status="<?php echo e($item->status); ?>" id="click_harga" data-target="#edit_harga" style="color:white">Edit</a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo $__env->make('modul_admin.laundri.editharga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-black">Form Tambah Data Harga</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('harga-store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                            <?php if($karyawan == !null): ?>
                            <div class="row p-t-20">

                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Cabang</label>
                                        <select name="user_id" class="form-control <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                            <option value="">-- Pilih Cabang --</option>
                                            <?php $__currentLoopData = $getcabang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_cabang); ?> - <?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['user_id'];
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
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Jenis Pakaian</label>
                                        <input type="text" name="jenis" value="<?php echo e(old('jenis')); ?>" class="form-control <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tambahkan Jenis Pakaian" required autocomplete="off">
                                        <small class="form-control-feedback "> Pisahkan Dengan format '+' Jika Jenis Lebih Dari Satu </small>
                                        <?php $__errorArgs = ['jenis'];
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
                                <!--/span-->
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Berat Per-Kg</label>
                                        <input type="text" class="form-control form-control-danger" value="1000 gram" placeholder="Berat" readonly autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--/span-->
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Harga Per-Kg</label>
                                        <input type="number" class="form-control form-control-danger <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="harga" value="<?php echo e(old('harga')); ?>"placeholder="Harga Per-Kg" autocomplete="off" required>
                                        <small class="form-control-feedback "> Tuliskan Tanpa tanda ',' dan '.' </small>
                                        <?php $__errorArgs = ['harga'];
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
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Lama Hari</label>
                                        <input type="number" name="hari" value="<?php echo e(old('hari')); ?>" class="form-control <?php $__errorArgs = ['hari'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Lama Hari" autocomplete="off" required>
                                        <?php $__errorArgs = ['hari'];
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
                            <!--/row-->

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                        <?php else: ?>
                            <h5 class="text-danger">Upsss, data karyawan/cabang masih kosong nih !!!</h5> <br>
                            <a href="<?php echo e(url('kry')); ?>" class="btn btn-success btn-block">Tambah Karyawan</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

// Tampilkan Modal Edit Harga
$(document).on('click','#click_harga', function(){
    var id = $(this).attr('data-id');
    var jenis = $(this).attr('data-id-jenis');
    var kg = $(this).attr('data-id-kg');
    var hari = $(this).attr('data-id-hari');
    var harga = $(this).attr('data-id-harga');
    var status = $(this).attr('data-id-status');
    $("#id_harga").val(id)
    $("#jenis").val(jenis)
    $("#kg").val(kg)
    $("#hari").val(hari)
    $("#harga").val(harga)
    $("#status").val(status)

});
// Proses Edit harga
$(document).on('click','#simpan_harga', function(){
    var id_harga = $("#id_harga").val();
    var jenis = $("#jenis").val();
    var kg = $("#kg").val();
    var hari = $("#hari").val();
    var harga = $("#harga").val();
    var status = $("#status").val();

    $.get('<?php echo e(Url("edit-harga")); ?>',{'_token': $('meta[name=csrf-token]').attr('content'),id_harga:id_harga,hari:hari,jenis:jenis,kg:kg,harga:harga,status:status}, function(resp){

    $("#id_harga").val('');
    $("#jenis").val('');
    $("#kg").val('');
    $("#hari").val('');
    $("#harga").val('');
    $("#status").val('');
    location.reload();
    });
 });


 $(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/modul_admin/laundri/harga.blade.php ENDPATH**/ ?>
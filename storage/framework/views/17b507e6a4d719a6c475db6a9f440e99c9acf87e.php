<?php $__env->startSection('title','Admin - Data Transaksi'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title"> Data Transaksi
                <div class="row">
                      <div class="col-4">
                          <select name="user_id" id="user_id" class="form-control">
                              <option value="all">--Semua Transaksi--</option>
                                  <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>">Karyawan <?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                  </div>
                  <div class="cl-3">
                      <button class="btn btn-primary" id="filter">Filter</button>
                  </div>
                </div>
              </h4>
              <div class="table-responsive m-t-0">
                  <table id="myTable" class="table display table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>TGL Transaksi</th>
                              <th>Customer</th>
                              <th>Status Order</th>
                              <th>Status Pembayaran</th>
                              <th>Jenis Laundri</th>
                              <th>Total</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody id="refresh_body">
                          <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e($key+1); ?></td>
                              <td><?php echo e(carbon\carbon::parse($item->tgl_transaksi)->format('d-m-y')); ?></td>
                              <td><?php echo e($item->customer); ?></td>
                              <td>
                                  <?php if($item->status_order == 'Done'): ?>
                                      <span class="label label-success">Selesai</span>
                                  <?php elseif($item->status_order == 'Delivery'): ?>
                                      <span class="label label-info">Sudah Diambil</span>
                                  <?php elseif($item->status_order == 'Process'): ?>
                                      <span class="label label-info">Sedang Proses</span>
                                  <?php endif; ?>
                              </td>
                              <td>
                                  <?php if($item->status_payment == 'Success'): ?>
                                      <span class="label label-success">Sudah Dibayar</span>
                                  <?php elseif($item->status_payment == 'Pending'): ?>
                                      <span class="label label-info">Belum Dibayar</span>
                                  <?php endif; ?>
                              </td>
                              <td><?php echo e($item->price->jenis); ?></td>
                              <td>
                                <p><?php echo e(Rupiah::getRupiah($item->harga_akhir)); ?></p>
                              </td>
                              <td align="center">
                                <?php if($item->status_order == "Delivery"): ?>
                                  <a href="<?php echo e(url('invoice-customer', $item->invoice)); ?>" class="btn btn-sm btn-success" style="color:white">Invoice</a>
                                <?php elseif($item->status_order == "Done"): ?>
                                  <a href="<?php echo e(url('invoice-customer', $item->invoice)); ?>" class="btn btn-sm btn-success" style="color:white">Invoice</a>
                                <?php elseif($item->status_order == "Process"): ?>
                                  <a href="<?php echo e(url('invoice-customer', $item->invoice)); ?>" class="btn btn-sm btn-success" style="color:white">Invoice</a>
                                <?php endif; ?>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
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

$("#filter").click(function(){
    var user_id  = $("#user_id").val();
    $.get('filter-transaksi',{'_token': $('meta[name=csrf-token]').attr('content'),user_id:user_id}, function(resp){
    $("#refresh_body").html(resp);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/modul_admin/transaksi/index.blade.php ENDPATH**/ ?>
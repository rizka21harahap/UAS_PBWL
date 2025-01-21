<?php $__env->startSection('title','Karyawan - Data Customer'); ?>
<?php $__env->startSection('header','Data Customer'); ?>
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
<div class="card">
    <div class="card-body">
        <div class="table-responsive m-t-5">
                <a href="<?php echo e(url('list-customer-add')); ?>" class="btn btn-primary">Tambah Customer</a>
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr align="center" style="color:black; font-weight:bold">
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Telpon</th>
                        <th>Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center" style="color:black;">
                        <td><?php echo e($no); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->email_customer); ?></td>
                        <td><?php echo e($item->alamat); ?></td>
                        <td><?php echo e($item->no_telp); ?></td>
                        <td>
                            <?php if($item->kelamin == 'L'): ?>
                                <span class="label label-success">Laki-laki</span>
                            <?php else: ?>
                                <span class="label label-info">Perempuan</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="<?php echo e(url('customer-delete', $item->id_customer)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="<?php echo e(url('add-order')); ?>" class="btn btn-sm btn-primary" style="color:white">Add Order</a>
                            </form>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
// DataTable
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/karyawan/transaksi/customer.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title','Karyawan - Invoice Customer'); ?>
<?php $__env->startSection('header','Invoice Customer'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card card-body printableArea">
        <h3><b>INVOICE</b> <span class="pull-right"><?php echo e($data->invoice); ?></span></h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <address>
                        <h3> &nbsp;<b class="text-danger"><?php echo e($data->nama_cabang); ?></b></h3>
                        <p class="text-muted m-l-5"> Diterima Oleh <span style="margin-left:20px"> </span>: <?php echo e($data->name); ?>

                            <br/> Alamat <span style="margin-left:70px"> </span>: <?php echo e($data->alamat_cabang); ?>,
                            <br/> No. Telp <span style="margin-left:68px"> </span>: <?php echo e($data->no_telpc); ?>,
                            </p>
                    </address>
                </div>
                <div class="pull-right text-right">
                    <address>
                        <h3>Detail Order Customer :</h3>
                        <p class="text-muted m-l-30">
                            <?php echo e($data->nama); ?>

                            <br/> <?php echo e($data->alamat); ?>

                            <br/> <?php echo e($data->no_telp); ?></p>
                        <p class="m-t-30"><b>Tanggal Masuk :</b> <i class="fa fa-calendar"></i> <?php echo e(carbon\carbon::parse($data->tgl_transaksi)->format('d-m-Y')); ?></p>
                        <p><b>Tanggal Diambil :</b> <i class="fa fa-calendar"></i>
                            <?php if($data->tgl_ambil == ""): ?>
                                Belum Diambil
                            <?php else: ?>
                            <?php echo e(\carbon\carbon::parse($data->tgl_ambil)->format('d-m-Y')); ?>

                            <?php endif; ?>
                        </p>
                    </address>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-t-20" style="clear: both;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Jenis Pakaian</th>
                                <th class="text-right">Berat</th>
                                <th class="text-right">Harga</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td><?php echo e($item->jenis); ?></td>
                                    <td class="text-right"><?php echo e($item->kg); ?> / kg</td>
                                    <td class="text-right"><?php echo e(Rupiah::getRupiah($item->harga)); ?> /kg</td>
                                    <td class="text-right">
                                        <input type="hidden" value="<?php echo e($hitung = $item->kg * $item->harga); ?>">
                                        <p style="color:black"><?php echo e(Rupiah::getRupiah($hitung)); ?></p>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pull-left m-t-10">
                    <h6 class="text-right" style="font-weight:bold">Dengan Menandatangani/Menerima Nota Ini, Berarti Anda Setuju :</h6>
                    <p>
                        1. Isi Deskripsi <br>
                        2. Isi Deskripsi
                    </p>
                </div>
                <div class="pull-right m-t-10 text-right">
                    <p>Total : <?php echo e(Rupiah::getRupiah($hitung)); ?></p>
                    <p>Disc <?php if($item->disc == ""): ?>
                        (0 %)
                    <?php else: ?>
                        (<?php echo e($item->disc); ?> %)
                    <?php endif; ?> :  </p>
                    <hr>
                    <h3><b>Total Bayar :</b> <?php echo e(Rupiah::getRupiah($item->harga_akhir)); ?></h3>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="clearfix"></div>
                <hr>
                <div class="text-right">
                    <a href="<?php echo e(url('pelayanan')); ?>" class="btn btn-outline btn-danger" style="color:white">Back</a>
                    <a href="<?php echo e(url('cetak-invoice/'.$item->id. '/print')); ?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zulfadhlisyarif/Downloads/laundry/resources/views/karyawan/laporan/invoice.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Supplier</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Supplier</th>
                        <td><?php echo e($supplier->nama_supplier); ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo e($supplier->alamat); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('supplier.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/supplier/show.blade.php ENDPATH**/ ?>
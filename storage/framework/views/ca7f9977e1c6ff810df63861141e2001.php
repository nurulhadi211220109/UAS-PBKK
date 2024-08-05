
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Customer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?php echo e($customer->nama); ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo e($customer->alamat); ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo e($customer->jenis_kelamin); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/customers/show.blade.php ENDPATH**/ ?>
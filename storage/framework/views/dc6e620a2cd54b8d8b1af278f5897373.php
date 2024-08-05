
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Merek Komputer</th>
                        <td><?php echo e($komputer->merek_komputer); ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo e($komputer->jenis_komputer); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('komputer.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/komputer/show.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Komputer</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('komputer.update', $komputer->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Merek Komputer</label>
                            <select name="merek_komputer" class="form-control" required>
                                <option value="Asus" <?php echo e($komputer->merek_komputer == 'Asus' ? 'selected' : ''); ?>>ASUS</option>
                                <option value="Acer" <?php echo e($komputer->merek_komputer == 'Acer' ? 'selected' : ''); ?>>ACER</option>
                                <option value="Lenovo" <?php echo e($komputer->merek_komputer == 'Lenovo' ? 'selected' : ''); ?>>LENOVO</option>
                                <option value="Samsung" <?php echo e($komputer->merek_komputer == 'Samsung' ? 'selected' : ''); ?>>SAMSUNG</option>
                                <option value="Apple" <?php echo e($komputer->merek_komputer == 'Apple' ? 'selected' : ''); ?>>APPLE</option>
                            </select>
                        </div>
                        <div>
                        <label>Jenis Komputer</label>
                        <input type="text" name="jenis_komputer" class="form-control" value="<?php echo e($komputer->jenis_komputer); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/komputer/edit.blade.php ENDPATH**/ ?>
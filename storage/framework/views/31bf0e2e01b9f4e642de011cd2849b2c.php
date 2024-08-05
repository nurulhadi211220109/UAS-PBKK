
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Edit Customer</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo e(route('customers.update', $customer->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e($customer->nama); ?>" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?php echo e($customer->alamat); ?></textarea>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" required>
                  <option value="L" <?php echo e($customer->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                  <option value="P" <?php echo e($customer->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
              </select>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/customers/edit.blade.php ENDPATH**/ ?>
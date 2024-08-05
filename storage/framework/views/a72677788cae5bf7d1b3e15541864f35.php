
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Pegawai</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($index + 1); ?></td>
                            <td><?php echo e($pegawai->nama_pegawai); ?></td>
                            <td><?php echo e($pegawai->alamat); ?></td>
                            <td><?php echo e($pegawai->jenis_kelamin); ?></td>
                            <td><?php echo e($pegawai->jabatan); ?></td>
                            <td><?php echo e($pegawai->status); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('pegawai.destroy', $pegawai->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('pegawai.show', $pegawai->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="<?php echo e(route('pegawai.edit', $pegawai->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">Data Pegawai Belum Ada.</td>
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\servis-komputer\resources\views/pegawai/index.blade.php ENDPATH**/ ?>
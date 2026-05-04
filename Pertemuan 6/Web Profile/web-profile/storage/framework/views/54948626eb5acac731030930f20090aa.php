

<?php $__env->startSection('content'); ?>

<div class="card">
    <h2>About Me</h2>
    <p><b>Alamat:</b> <?php echo e($data['alamat']); ?></p>
    <p><b>Email:</b> <?php echo e($data['email']); ?></p>
    <p><b>Kontak:</b> <?php echo e($data['kontak']); ?></p>
    <p><b>LinkedIn:</b> <?php echo e($data['linkedin']); ?></p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Repositories ABP\Pertemuan 6\Web Profile\web-profile\resources\views/pages/about.blade.php ENDPATH**/ ?>
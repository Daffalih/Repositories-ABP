

<?php $__env->startSection('content'); ?>

<div class="card profile">
    <img src="<?php echo e(asset('foto-daffa.jpg')); ?>">
    <h1><?php echo e($data['nama']); ?></h1>
    <p><?php echo e($data['ringkasan']); ?></p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Repositories ABP\Pertemuan 6\Web Profile\web-profile\resources\views/pages/home.blade.php ENDPATH**/ ?>
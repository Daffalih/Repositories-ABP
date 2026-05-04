

<?php $__env->startSection('content'); ?>

<h2>Experience</h2>

<?php $__currentLoopData = $data['pengalaman']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">
    <h3><?php echo e($exp['title']); ?></h3>
    <p><b><?php echo e($exp['company']); ?></b></p>
    <ul>
        <?php $__currentLoopData = $exp['desc']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($d); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Repositories ABP\Pertemuan 6\Web Profile\web-profile\resources\views/pages/experience.blade.php ENDPATH**/ ?>
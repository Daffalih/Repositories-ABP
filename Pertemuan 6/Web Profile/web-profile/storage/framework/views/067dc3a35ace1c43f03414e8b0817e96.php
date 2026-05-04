

<?php $__env->startSection('content'); ?>

<div class="card">
    <h2>Skills</h2>
    <ul>
    <?php $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($skill); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Repositories ABP\Pertemuan 6\Web Profile\web-profile\resources\views/pages/skills.blade.php ENDPATH**/ ?>
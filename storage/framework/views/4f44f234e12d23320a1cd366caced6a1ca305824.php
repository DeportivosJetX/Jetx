<?php $__env->startSection('title', 'Juan'); ?>
<?php $__env->startSection('contenido'); ?>
<main class="content">
<?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            id:<?php echo e($cat->id); ?><br>
            nombre:<?php echo e($cat->nombre); ?><br>
            imagen:<?php echo e($cat->imagen); ?><br><br>
        </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/juan.blade.php ENDPATH**/ ?>
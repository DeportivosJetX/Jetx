

<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <main class="content-home">
        <div class="content">
            <?php if(isset($message)): ?>
                <span class="mt:4 mb:2"><?php echo e($message); ?></span>
            <?php endif; ?>
            <?php $__empty_1 = true; $__currentLoopData = session('deportes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="imgcat">
                <a href="<?php echo e(route('productos.indexDeporte',$deporte)); ?>" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="<?php echo e(Storage::url($deporte->imagen)); ?>" alt="<?php echo e($deporte->descripcion_img); ?>">
                    <div class="overlay">
                        <p class="text"><?php echo e($deporte->nombre); ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/home.blade.php ENDPATH**/ ?>
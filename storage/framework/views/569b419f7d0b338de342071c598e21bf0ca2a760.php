

<?php $__env->startSection('title'); ?>
 Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/glider.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>
    <script src="<?php echo e(asset('js/glider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/gliderApp.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <main class="content-home">
        <div class="content">
            
            <div class="imgcat">
                
            </div>
            

            
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/home.blade.php ENDPATH**/ ?>
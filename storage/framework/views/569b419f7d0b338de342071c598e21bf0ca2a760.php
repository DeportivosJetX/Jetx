

<?php $__env->startSection('title', 'HOME'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content-home">
        <div class="content">

            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/patinaje.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Patinaje</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/futbol.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Fútbol</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/baloncesto.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Baloncesto</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/tennis.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Tennis</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/algo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/home.blade.php ENDPATH**/ ?>
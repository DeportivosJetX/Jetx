

<?php $__env->startSection('title', 'Iniciar Sesión'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <form action="" class="form" method="post">
            <h1 id="iniciar">Iniciar sesión</h1>

            <div class="form-datos">
                <input type="text" class="form-input input-login" placeholder="Email/Usuario" id="usuario">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-datos">
                <input type="password" class="form-input input-login" placeholder="Contraseña" id="contraseña">
                <i class="fa fa-lock"></i>
            </div>
            <div class="contenedor-btn">
                <input type="submit" class="btn-enviar" value="Entrar">
            </div>
            <div class="bottom-text">
                <div>¿Aún no estás registrado?</div>
                <a class="link" href="">Entra aquí</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/algo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/login.blade.php ENDPATH**/ ?>
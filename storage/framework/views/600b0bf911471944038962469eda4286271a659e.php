<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns/website#">
<?php echo $__env->make('components/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="contenedor">
        
        
        <div class="contenedor-inicio-sesion">
            <div class="contenedor-inicio-sesion__scroll">
                <div class="contenedor-formulario">
                    <form action="" class="form-inicio-sesion" method="post">
                        <div class="cerrar-inicio-sesion">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="content-inicio-sesion">
                            <div class="form-iniciar-sesion__title">
                                <h2>Iniciar sesión</h2>
                            </div>
                            <div class="form-datos-iniciar-sesion">
                                <input type="text" class="form-input input-login" placeholder="Email/Usuario" id="usuario">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="form-datos-iniciar-sesion">
                                <input type="password" class="form-input input-login" placeholder="Contraseña" id="contraseña">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="form-iniciar-sesion__boton">
                                <input type="submit" class="btn-enviar" value="Entrar">
                            </div>
                            <div class="form-iniciar-sesion__bottom-text">
                                <p>¿Aún no estás registrado?</p>
                                <a class="link" href="#">Entra aquí</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ir-arriba" id="ir-arriba">
            <i class="fas fa-angle-up"></i>
        </div>
        <?php echo $__env->make('components/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('contenido'); ?>

        <?php echo $__env->make('components/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!--Script -->
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    <?php echo $__env->yieldContent('scriptFooter'); ?>
</body>

</html>
<?php /**PATH C:\www\jetx\resources\views/layouts/layout.blade.php ENDPATH**/ ?>
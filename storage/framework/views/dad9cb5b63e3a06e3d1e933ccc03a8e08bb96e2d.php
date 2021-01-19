<div id="contenedor-menu-main" class="menu-responsive  menu-fijo">
    <div id="mobile-menu" class="menu-container">
        <div class="menu-header">
            <h3 id="close-menu-main" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Menú</h3>
        </div>
        <div class="scroll-menu-main">
            <ul id="menu-main" class="menu-main menu">
                <li class="menu-item active"><a href="<?php echo e(route('home')); ?>"><span>Home</span></a></li>
                <?php if(session()->has('categoria')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-producto"><span>Patinaje</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <?php if(session()->has('coleccion')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Fútbol</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <?php if(session()->has('coleccion')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Baloncesto</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <?php if(session()->has('coleccion')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Tennis</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <li class="menu-item iniciar-sesion"><a href="#"><span>Iniciar Sesión / Registro</span></a></li>
            </ul>
        </div>
        <div class="menu-categoria" id="menu-categoria">
            <div class="menu-header">
                <h3 class="menu-categoria__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    <?php if(session()->has('categoria')): ?>
                    <?php $__empty_1 = true; $__currentLoopData = session('categoria'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('productos.indexCategoria',$categoria)); ?>" class="menu-link" style="background-image: url('/storage/<?php echo e($categoria->imagen); ?>');">
                        <div class="menu-link__title">
                            <h3><?php echo e(strtoupper($categoria->nombre)); ?></h3>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No hay categorías
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="menu-categoria" id="menu-coleccion">
            <div class="menu-header">
                <h3 class="menu-col__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    <?php if(session()->has('coleccion')): ?>
                    <?php $__empty_1 = true; $__currentLoopData = session('coleccion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coleccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('productos.indexColeccion',$coleccion)); ?>" class="menu-link" style="background-image: url('/storage/<?php echo e($coleccion->imagen); ?>');">
                        <div class="menu-link__title">
                            <h3><?php echo e(strtoupper($coleccion->nombre)); ?></h3>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No hay colecciones
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/components/menuResponsive.blade.php ENDPATH**/ ?>
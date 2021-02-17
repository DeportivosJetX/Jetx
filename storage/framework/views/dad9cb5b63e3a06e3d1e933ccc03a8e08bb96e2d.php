<div id="contenedor-menu-main" class="menu-responsive  menu-fijo">
    <div id="mobile-menu" class="menu-container">
        <div class="menu-header">
            <h3 id="close-menu-main" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Menú</h3>
        </div>
        <div class="scroll-menu-main">
            <ul id="menu-main" class="menu-main menu">
                <li class="menu-item active"><a href="<?php echo e(route('home')); ?>"><span>Home</span></a></li>
                <li class="menu-item"><a href="<?php echo e(route('productos.index')); ?>" class="menu-main__link"><span>Productos</span></a></li>
                <?php if(session()->has('deportes')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-producto"><span>Deportes</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <?php if(session()->has('categorias')): ?>
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Categorias</span><i class="fas fa-angle-double-right"></i></a></li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="menu-item"><a href="<?php echo e(route('rotacion')); ?>" class="menu-main__link"><span>Informe de Rotación</span></a></li>
                <li class="menu-item"><a href="<?php echo e(route('ingresos')); ?>" class="menu-main__link"><span>Informe de Ingresos</span></a></li>
                <li class="menu-item">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'class' => 'menu-main__link','onclick' => 'event.preventDefault();
                                            this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'class' => 'menu-main__link','onclick' => 'event.preventDefault();
                                            this.closest(\'form\').submit();']); ?>
                            <?php echo e(__('Logout')); ?>

                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </form>
                </li>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                <li class="menu-item iniciar-sesion"><a href="<?php echo e(route('login')); ?>"><span>Iniciar Sesión / Registro</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="menu-categoria" id="menu-categoria">
            <div class="menu-header">
                <h3 class="menu-categoria__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    <?php if(session()->has('deportes')): ?>
                    <?php $__empty_1 = true; $__currentLoopData = session('deportes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('productos.indexDeporte',$deporte)); ?>" class="menu-link" style="background-image: url('/storage/<?php echo e($deporte->imagen); ?>');">
                        <div class="menu-link__title">
                            <h3><?php echo e(strtoupper($deporte->nombre)); ?></h3>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No hay deportes
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
                    <?php if(session()->has('categorias')): ?>
                    <?php $__empty_1 = true; $__currentLoopData = session('categorias'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('productos.indexCategoria',$categoria)); ?>" class="menu-link" style="background-image: url('/storage/<?php echo e($categoria->imagen); ?>');">
                        <div class="menu-link__title">
                            <h3><?php echo e(strtoupper($categoria->nombre)); ?></h3>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No hay categorias
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/components/menuResponsive.blade.php ENDPATH**/ ?>
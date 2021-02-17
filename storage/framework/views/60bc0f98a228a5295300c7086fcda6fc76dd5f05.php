<header class="header">
    <div class="banner">
        <div class="menu-movil">
            <a href="javascript:void(0);" class="fas-link">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="banner__logo">
            <a href="<?php echo e(route('home')); ?>" class="logo__link">
                <img class="logo" src="<?php echo e(asset('storage/images/JetX.png')); ?>" alt="logo deportivos jetx">
                <h1>Deportivos JetX</h1>
            </a>
        </div>
        <div class="banner__iconos">
            <div class="icono__search">
                <a id="link-buscar" class="fas-link" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="icono__car">
                <a id="link-carrito" class="fas-link" href="javascript:void(0)" title="Ver su carrito de compras">
                    <i class="fas fa-shopping-cart"></i>
                    <?php if(session()->has('carrito')): ?>
                    <span class=""><?php echo e(count(session('carrito'))); ?></span>
                    <?php else: ?>
                    <span class="">0</span>
                    <?php endif; ?>
                    
                </a>
            </div>
            <?php if(auth()->guard()->check()): ?>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-4">
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                     <?php $__env->slot('trigger'); ?> 
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            
                            <div>
                                <img src="https://ui-avatars.com/api/?font-size=0.3&rounded=true&bold=true&format=svg&background=000&color=fff&size=35&name=<?php echo e(Auth::user()->name); ?>" alt="Avatar usuario">
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content'); ?> 
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('ingresos')]]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('ingresos'))]); ?>
                            <?php echo e(__('Informe de ingresos')); ?>

                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('rotacion')]]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('rotacion'))]); ?>
                            <?php echo e(__('Informe de rotación')); ?>

                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>

                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Logout')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                        </form>
                     <?php $__env->endSlot(); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            </div>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <div class="icono__user iniciar-sesion ml-3">
                <a class="fas-link" href="<?php echo e(route('login')); ?>"><i class="fas fa-user"></i></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <nav class="menu-desktop">
        <ul class="menu-desktop__list menu-desktop__firstlevel">
            <li class="list-item "><a class="list-item__link home" href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i><span>HOME</span></a></li>
            <?php if(session()->has('deportes')): ?>
            <?php $__empty_1 = true; $__currentLoopData = session('deportes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="list-item "><a class="list-item__link" href="<?php echo e(route('productos.indexDeporte',$deporte)); ?>"><span><?php echo e($deporte->nombre); ?></span></a>
                <?php if(session()->has('categorias')): ?>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
                <?php $__empty_2 = true; $__currentLoopData = session('categorias'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="<?php echo e(route('productos.indexDeporteCategoria',[$deporte,$categoria])); ?>"><span><?php echo e($categoria->nombre); ?></span></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorias</span></a></li>
                <?php endif; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<?php /**PATH C:\www\jetx\resources\views/components/header.blade.php ENDPATH**/ ?>
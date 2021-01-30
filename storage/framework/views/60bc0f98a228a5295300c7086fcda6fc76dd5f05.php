<header class="header">
    <div class="banner">
        <div class="menu-movil">
            <a href="javascript:void(0);" class="fas-link">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="banner__logo">
            <a href="<?php echo e(route('home')); ?>" class="logo__link">
                <img class="logo" src="<?php echo e(asset('../storage/images/JetX.png')); ?>" alt="logo deportivos jetx">
                <h1>Deportivos JetX</h1>
            </a>
        </div>
        <div class="banner__iconos">
            <div class="icono__search">
                <a id="link-buscar" class="fas-link" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="icono__user iniciar-sesion">
                <a class="fas-link" href="<?php echo e(route('login')); ?>"><i class="fas fa-user"></i></a>
            </div>
            <div class="icono__car">
                <a id="link-carrito" class="fas-link" href="javascript:void(0)" title="Ver su carrito de compras">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="">0</span>
                </a>
            </div>
        </div>
    </div>
    <nav class="menu-desktop">
        <ul class="menu-desktop__list menu-desktop__firstlevel">
            <li class="list-item "><a class="list-item__link home" href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i><span>HOME</span></a></li>
            <?php if(session()->has('deportes')): ?>
            <?php $__empty_1 = true; $__currentLoopData = session('deportes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="list-item "><a class="list-item__li.index') }}"><span><?php echo e($deporte->nombre); ?></span></a>
                <?php if(session()->has('categorias')): ?>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
                <?php $__empty_2 = true; $__currentLoopData = session('categorias'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link"><span><?php echo e($categoria->nombre); ?></span></a></li>
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
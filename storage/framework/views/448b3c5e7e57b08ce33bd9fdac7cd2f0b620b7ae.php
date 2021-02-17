<?php $__env->startSection('title','Productos'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/productos.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<main class="content-home">
    <div class="content">
            <div class="content__title">
                <?php if(isset($title)): ?>
                <h2 class=""><?php echo e(strtoupper($title)); ?></h2>
                <?php else: ?>
                <h2 class="">PRODUCTOS</h2>
                <?php endif; ?>
                
            </div>
            <div class="content__orderBy" id="content__orderBy">
                <p id="cont-orderBy"><span id="orderBy">Alfabéticamente: A-Z</span><i id="listaFiltro" class="fas fa-list"></i></p>
                <ul class="list-orderBy" id="list-orderBy">
                    <li class="list-orderBy__item <?php echo e(sortByActive('title-ascending')); ?>" data-filtro="Alfabéticamente: A-Z"><a href="<?php echo e(request()->url()); ?>?sort_by=title-ascending">Alfabéticamente: A-Z</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('title-descending')); ?>" data-filtro="Alfabéticamente: Z-A"><a href="<?php echo e(request()->url()); ?>?sort_by=title-descending">Alfabéticamente: Z-A</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('price-ascending')); ?>" data-filtro="Precio: Menor a mayor"><a href="<?php echo e(request()->url()); ?>?sort_by=price-ascending">Precio: Menor a mayor</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('price-descending')); ?>" data-filtro="Precio: Mayor a menor"><a href="<?php echo e(request()->url()); ?>?sort_by=price-descending">Precio: Mayor a menor</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('created-descending')); ?>" data-filtro="Fecha: Mas nuevo"><a href="<?php echo e(request()->url()); ?>?sort_by=created-descending">Fecha: Mas nuevo</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('created-ascending')); ?>" data-filtro="Fecha: Mas antiguo"><a href="<?php echo e(request()->url()); ?>?sort_by=created-ascending">Fecha: Mas antiguo</a></li>
                    <li class="list-orderBy__item <?php echo e(sortByActive('best-selling')); ?>" data-filtro="Más vendidos"><a href="<?php echo e(request()->url()); ?>?sort_by=best-selling">Más vendidos</a></li>
                </ul>
            </div>
        </div>
        <div id="content-products" class="collection-products">
            <?php echo $__env->make('productData', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
<script src="<?php echo e(asset('js/filtrarProducto.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/productos.blade.php ENDPATH**/ ?>
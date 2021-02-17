

<?php $__env->startSection('title','Carrito'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/carrito.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="row cart-content content">
    <h1 class="mb:4 title-inform">CARRITO DE COMPRAS</h1>
    <?php if(isset($error)): ?>
        <span><?php echo e($error); ?></span>
    <?php endif; ?>
    <div class="cart-content__productList ">
        <div class="cart-info">
            <h4 class="font-title font-title--sub-title-3 ">
                <?php if(session()->has('carrito')): ?>
                    Productos en el carrito:<span>(<?php echo e(count(session('carrito'))); ?>)</span>
                    <?php else: ?>
                    Productos en el carrito:<span>(0)</span>
                    <?php endif; ?>
            </h4>
            <div class="yCmsComponent yComponentWrapper">
                <div class="cart-item-list">
                    <ul class="item__list item__list__cart">
                        <?php 
                        $subtotal = 0;
                        ?>
                        <?php if(session()->has('carrito')): ?>
                        <?php $__empty_1 = true; $__currentLoopData = session('carrito'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="item__list--item ">
                            <div class="item__main">
                                <div class="item-column item__image">
                                    <a title="" href="<?php echo e(route('productos.show',$car['producto'])); ?>">
                                        <img loading="lazy" alt="" title="" width="100" src="<?php echo e(Storage::url($car['producto']->imagenProductos[0]->nombre_imagen)); ?>" style="opacity: 1;">
                                    </a>
                                </div>
                                <div class="item-column item__info">
                                    <a href="<?php echo e(route('productos.show',$car['producto'])); ?>">
                                        <span class="item__name"><?php echo e($car['producto']->nombre); ?></span>
                                    </a>
                                    <span class="talla-producto">Talla: <?php echo e($car['tallaN']); ?></span>
                                    <div class="item__interactions hidden-xs hidden-sm">
                                        <form action="<?php echo e(route('carrito.delete',($loop->index))); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="item__interactions__button">
                                                <i class="icon-bin"><i class="far fa-trash-alt"></i>Eliminar</i> 
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item-column">
                                <div class="form-check radio-green">
                                    <div class="delivery-text">Envío <span class="cart-free-delivery">gratis</span></div>
                                    <div class="label-green-check"><figure class="icon-truck"></figure></div>
                                </div>
                            </div>
                            <div class="item-column item__price">
                                <div class="align-items">
                                    <span class="item__price__main">
                                        <?php echo e(number_format($car['producto']->costo*$car['cantidad'])); ?>

                                        <?php
                                            $subtotal += $car['producto']->costo*$car['cantidad']
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="item-column item__quantity">
                                <div class="form-group red-arrow item__quantity__form">
                                    <label for="quantity0">
                                        Cantidad: 
                                    </label>
                                    <span class="plain-select">
                                        <?php echo e($car['cantidad']); ?>

                                    </span>
                                </div>
                                <div class="item__interactions hidden-md hidden-lg">
                                    <form action="<?php echo e(route('carrito.delete',($loop->index))); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="cel_item__interactions__button">
                                            <i class="icon-bin"><i class="far fa-trash-alt"></i>Eliminar</i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <br>
                        <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="item__list--item ">Carrito vacío</li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="item__list--item ">Carrito vacío</li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xs-12 hidden-md hidden-lg">
                        <div class="mobile-cart-totals">
                            <div class="col-xs-6 cart-totals-left mycart mycart__discount--total mycart--bold grand-total">
                                Total
                            </div>
                            <div class="">
                                $<?php echo e(number_format($subtotal)); ?>

                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="cart-bottom-actions contenedor-btn">
                            <div class=" buscar-btn ">
                                <a class=" " href="<?php echo e(route('productos.index')); ?>" >Continuar comprando</a>
                            </div>
                            <div class=" buscar-btn">
                                <a class=" " href="<?php echo e(route('carrito.confirmo')); ?>" >Ir a pagar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/shoppingCar.blade.php ENDPATH**/ ?>
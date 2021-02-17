<div class="menu-responsive carrito-fijo" id="contenedor-carrito">
    <div class="menu-container">
        <div class="menu-header">
            <h3 id="close-carrito" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Carrito</h3>
        </div>
        <div class="menu-content">
            <div class="menu-content__scroll">
                <ul class="carrito-contenido__lista">
                    <?php 
                    $subtotal = 0;
                    ?>
                    <?php if(session()->has('carrito')): ?>
                    <?php $__empty_1 = true; $__currentLoopData = session('carrito'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="<?php echo e(Storage::url($car['producto']->imagenProductos[0]->nombre_imagen)); ?>" alt="<?php echo e($car['producto']->nombre); ?>">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto"><?php echo e($car['producto']->nombre); ?></a>
                            <span class="talla-producto">Talla: <?php echo e($car['tallaN']); ?></span>
                            <span class="cantidad-producto">Cantidad: <?php echo e($car['cantidad']); ?></span>
                            <span class="precio-producto"><?php echo e($car['producto']->costo); ?></span>
                        </div>
                    </li>
                    <?php 
                    $subtotal += $car['producto']->costo*$car['cantidad'];
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="carrito-contenido__item carrito-contenido__vacio"><i class="addCarrito"></i> <span>No tienes productos en el carrito.</span></li> 
                    <?php endif; ?>   
                    <?php else: ?>
                    <li class="carrito-contenido__item carrito-contenido__vacio"><i class="addCarrito"></i> <span>No tienes productos en el carrito.</span></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="menu-content__footer">
                <p class="menu-content__footer__subtotal"><span class="subtotal">Subtotal:</span><span class="subtotal-valor">$<?php echo e((isset($subtotal)) ? number_format($subtotal):"0"); ?></span></p>
                <div class="menu-content__footer__botones">
                    <a href="<?php echo e(route('carrito.index')); ?>">Ver mi carrito</a>
                    <a href="<?php echo e(route('carrito.confirmo')); ?>">Ir a pagar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/components/carritoDesplegable.blade.php ENDPATH**/ ?>
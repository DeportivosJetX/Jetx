<div class="content__body">
    <?php if(isset($productos)): ?>
        <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card-producto">
            <a href="<?php echo e(route('productos.show',$producto)); ?>" class="card-producto__link">
            
                <?php if($producto->cantidad > 0 || $producto->descuento <= 0): ?>
                <div class="complements">
                    <?php if($producto->cantidad<=0): ?>
                    <span class="agotado">AGOTADO</span>
                    <?php endif; ?>
                    <?php if($producto->descuento > 0): ?>
                    <span class="descuento"><?php echo e(intval($producto->descuento*100)); ?> % OFF</span>
                    <?php endif; ?>
                </div>
                <?php else: ?>
                <div class="complements">
                    <span class="agotado">AGOTADO</span>
                    <span class="descuento"><?php echo e(intval($producto->descuento*100)); ?> % OFF</span>
                </div>
                <?php endif; ?>
                <img loading="lazy" class="card-producto__img" src="<?php echo e(Storage::url($producto->imagenProductos[0]->nombre_imagen)); ?>" alt="<?php echo e($producto->imagenProductos[0]->descripcion); ?>">
            </a>
            <div class="card-producto__body">
                <h5 class="card-producto__title"><?php echo e($producto->nombre); ?></h5>
                <p class="card-producto__precio">
                    <?php if($producto->descuento > 0): ?>
                    <span style="opacity: .5;text-decoration:line-through;">$<?php echo e(number_format($producto->precio)); ?></span> |
                    <span>$<?php echo e(number_format(($producto->costo) - ($producto->costo*$producto->descuento))); ?></span>
                    <?php else: ?>
                    <span>$<?php echo e(number_format($producto->costo)); ?></span>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php if(isset($productos)): ?>
    <?php if(isset($sort_by)): ?>
    <?php echo e($productos->appends(['sort_by' => $sort_by])->links()); ?>

    <?php else: ?>
    <?php echo e($productos->links()); ?>

    <?php endif; ?>
<?php endif; ?>

<?php /**PATH C:\www\jetx\resources\views/productData.blade.php ENDPATH**/ ?>
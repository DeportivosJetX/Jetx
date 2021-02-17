<div class="busqueda-component">
    <div class="busqueda__header">
        <div class="busqueda__input">
            <label for="input-buscar" class="fas fa-search"></label>
            <input
            id="input-buscar"
            type="search"
            placeholder="Buscar productos"
            wire:model="search">
        </div>
        <div id="busqueda__close" class="busqueda__close close-menu">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <div class="busqueda__contenido">
        <ul id="busqueda__lista" class="busqueda__lista">
            <?php if($search != ""): ?>
            <?php $__empty_1 = true; $__currentLoopData = $pSearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="busqueda__item">
                <a href="<?php echo e(route('productos.show',$producto)); ?>">
                    <div class="busqueda__item__img">
                        <img loading="lazy" src="<?php echo e(Storage::url($producto->imagenProductos[0]->nombre_imagen)); ?>" alt="<?php echo e($producto->imagenProductos[0]->descripcion); ?>">
                    </div>
                    <div class="busqueda__item__detalle">
                        <span class="nombre-producto"><?php echo e($producto->nombre); ?></span>
                        <?php if($producto->descuento > 0): ?>
                        <span style="color:#ff0000">SALE</span>
                        <span style="opacity: .5;text-decoration:line-through;" class="precio-producto">$<?php echo e(number_format($producto->costo)); ?></span>
                        <span class="precio-producto">$<?php echo e(number_format(($producto->costo) - ($producto->costo*$producto->descuento))); ?></span>
                        <?php else: ?>
                        <span class="precio-producto">$<?php echo e(number_format($producto->costo)); ?></span>
                        <?php endif; ?>
                    </div>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="busqueda__item sin-resultados">
                <span>¡No se encontraron resultados!</span>
            </li>
            <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/livewire/buscar.blade.php ENDPATH**/ ?>
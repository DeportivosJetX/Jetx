<div class="contenedor-tabla">
    <div class="tabla-fecha">
        <h3>Filtrar Por:</h3>
        <div class="itm">
            <div class="itm__datos label">
                <label for="nombre">Fecha inicio</label>
            </div>
            <div class="itm__datos fecha">
                <input
                type="date"
                id="fechainicio"
                class="tabla-input"
                title="fechainicio"
                wire:model="fechaInicio">
            </div>
        </div>
        <div class="itm">
            <div class="itm__datos label">
                <label for="nombre">Fecha fin</label>
            </div>
            <div class="itm__datos fecha">
                <input
                type="date"
                id="fechafin"
                class="tabla-input"
                title="fechafin"
                wire:model="fechaFin">
            </div>
        </div>
        
    </div>
    <div class="filtro">
        <div class="content__orderBy" id="content__orderBy">
            <p id="cont-orderBy"><span id="orderBy"><?php echo e($ordenar); ?></span><i id="listaFiltro" class="fas fa-list"></i>
            </p>
            <ul class="list-orderBy" id="list-orderBy">
                <li class="list-orderBy__item <?php echo e(sortByActiveR($orderBy,'desc')); ?>" data-filtro="Más vendidos"><a href="" wire:click.prevent = "orderDesc">Más vendidos</a></li>
                <li class="list-orderBy__item <?php echo e(sortByActiveR($orderBy,'asc')); ?>" data-filtro="Menos vendidos"><a href="" wire:click.prevent = "orderAsc">Menos vendidos</a></li>
            </ul>
        </div>
    </div>
    <div class="contenedor-tabla-visualizar">
        <table class="tabla-visualizar">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $busqueda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($bus->referencia); ?> <img class="image-producto" src="<?php echo e(Storage::url($bus->imagen)); ?>" alt=""></td>
                    <td><?php echo e($bus->producto); ?></td>
                    <td><?php echo e($bus->talla); ?></td>
                    <td><?php echo e($bus->cantidad); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">No hay productos por mostrar</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/livewire/rotacion-productos.blade.php ENDPATH**/ ?>
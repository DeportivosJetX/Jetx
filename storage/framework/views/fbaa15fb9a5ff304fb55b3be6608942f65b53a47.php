<div class="contenedor-tabla">
    <div class="tabla-fecha">
        <h3>Filtrar Por:</h3>
        <?php if($orderBy == "Diariamente" || $orderBy == "Semanalmente"): ?>
        <div class="itm">
            <div class="itm__datos label">
                <label for="nombre">Mes</label>
            </div>
            <div class="itm__datos fecha">
                <input
                type="month"
                id="mes"
                class="tabla-input"
                title="mes"
                wire:model="filtros">
            </div>
        </div>
        <div class="contenedor-btn">
            <form action="<?php echo e(route('ingresosF')); ?>" method="post">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e(($filtros == "") ? 'hoy' : $filtros); ?>" name="filtro">
                <input type="hidden" value="<?php echo e($orderBy); ?>" name="orderBy">
                <button class="buscar-btn" type="submit">Generar</button>
            </form>
        </div>
        <?php elseif($orderBy == "Mensualmente"): ?>
        <div class="itm">
            <div class="itm__datos label">
                <label for="nombre">Año</label>
            </div>
            <div class="itm__datos fecha">
                <input
                type="number"
                id="año"
                class="tabla-input"
                min="0"
                title="año"
                wire:model="filtros">
            </div>
        </div>
        <div class="contenedor-btn">
            <form action="<?php echo e(route('ingresosF')); ?>" method="post">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e(($filtros == "") ? 'hoy' : $filtros); ?>" name="filtro">
                <input type="hidden" value="<?php echo e($orderBy); ?>" name="orderBy">
                <button class="buscar-btn" type="submit">Generar</button>
            </form>
        </div>
        <?php endif; ?>
    </div>
    <div class="filtro">
        <div class="content__orderBy" id="content__orderBy">
            <p id="cont-orderBy"><span id="orderBy"><?php echo e($ordenar); ?></span><i id="listaFiltro"
                    class="fas fa-list"></i>
            </p>
            <ul class="list-orderBy" id="list-orderBy">
                <li class="list-orderBy__item <?php echo e(sortByActiveR($orderBy,'Diariamente')); ?>" data-filtro="Diariamente">
                    <form action="<?php echo e(route('ingresosF')); ?>" method="post">
                        <?php echo method_field('POST'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e(($orderBy == "Mensualmente") ? 'hoy' : $filtros); ?>" name="filtro">
                        <input type="hidden" value="Diariamente" name="orderBy">
                        <button type="submit">Diariamente</button>
                    </form>
                </li>
                <li class="list-orderBy__item <?php echo e(sortByActiveR($orderBy,'Mensualmente')); ?>" data-filtro="Mensualmente">
                    <form action="<?php echo e(route('ingresosF')); ?>" method="post">
                        <?php echo method_field('POST'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e(($orderBy == "Diariamente") ? 'hoy' : $filtros); ?>" name="filtro">
                        <input type="hidden" value="Mensualmente" name="orderBy">
                        <button type="submit">Mensualmente</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="contenedor-grafica">
        <div class="grafica">
            <canvas id="myChart"></canvas>
            <script>
                <?php if($orderBy == "Diariamente"): ?>
                var ctx1 = document.getElementById('myChart').getContext('2d');
                let dias = [];
                let ingresos = [];
                <?php
                $datos = datosD($busqueda,intval($fecha));
                ?>
                <?php for($i = 0; $i < count($datos[0]); $i++): ?>
                dias.push(<?php echo e($datos[0][$i]); ?>);
                ingresos.push(<?php echo e($datos[1][$i]); ?>);
                <?php endfor; ?>
                // <?php for($i = 0; $i < count($busqueda); $i++): ?>
                // dias.push(<?php echo e($busqueda[$i]->dia); ?>);
                // ingresos.push(<?php echo e($busqueda[$i]->total); ?>);
                // <?php endfor; ?>
                // console.log(dias);
                // console.log(ingresos);
                var chart = new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: dias,
                        datasets: [{
                            label: 'Ingresos',
                            borderColor: 'rgb(252, 136, 0)',
                            backgroundColor: 'rgba(252, 136, 0,.05)',
                            borderWidth: 1,
                            data: ingresos
                        }]
                    },
                    options: {}
                });
                <?php elseif($orderBy == "Mensualmente"): ?>
                var ctx1 = document.getElementById('myChart').getContext('2d');
                let dias = [];
                let ingresos = [];
                <?php
                $datos = datosM($busqueda);
                ?>
                <?php for($i = 0; $i < count($datos[0]); $i++): ?>
                dias.push(<?php echo e($datos[0][$i]); ?>);
                ingresos.push(<?php echo e($datos[1][$i]); ?>);
                <?php endfor; ?>
                var chart = new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                        datasets: [{
                            label: 'Ingresos',
                            borderColor: 'rgb(252, 136, 0)',
                            backgroundColor: 'rgba(252, 136, 0,.05)',
                            borderWidth: 1,
                            data: ingresos
                        }]
                    },
                    options: {}
                });
                <?php endif; ?>
            </script>
        </div>
    </div>
</div>
<?php /**PATH C:\www\jetx\resources\views/livewire/grafica-ingresos.blade.php ENDPATH**/ ?>
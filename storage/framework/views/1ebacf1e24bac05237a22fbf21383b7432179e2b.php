

<?php $__env->startSection('title', 'Informe de ingresos'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/rotacion.css')); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>
    <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <h1 id="iniciar">Informe de ingresos</h1>
        <div class="contenedor-tabla">
            <div class="tabla-fecha">
                <h3>Buscar:</h3>
                <div class="itm">
                    <div class="itm__datos label">
                        <label for="nombre">Fecha inicio</label>
                    </div>
                    <div class="itm__datos fecha">
                        <input type="date" id="fechainicio" class="tabla-input" placeholder="" title="fechainicio">
                    </div>
                </div>
                <div class="itm">
                    <div class="itm__datos label">
                        <label for="nombre">Fecha fin</label>
                    </div>
                    <div class="itm__datos fecha">
                        <input type="date" id="fechafin" class="tabla-input" placeholder="" title="fechafin">
                    </div>
                </div>
                <div class="contenedor-btn">
                    <button class="buscar-btn">Generar</button>
                </div>
            </div>
            <div class="filtro">
                <div class="content__orderBy" id="content__orderBy">
                    <p id="cont-orderBy"><span id="orderBy">Generar informe...</span><i id="listaFiltro"
                            class="fas fa-list"></i>
                    </p>
                    <ul class="list-orderBy" id="list-orderBy">
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: A-Z"><a href="">Diariamente</a></li>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Semanalmente</a>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Mensualmente</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contenedor-grafica">
                <div class="grafica">
                    <canvas id="myChart"></canvas>
                    <script>
                        var ctx1 = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                ],
                                datasets: [{
                                    label: 'Ganancias',
                                    borderColor: 'blue',
                                    data: [7, 8, 5, 2, 8, 10, 7, 0, 4, 90, 0, 5]
                                }]
                            },
                            options: {}
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/algo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/ingresos.blade.php ENDPATH**/ ?>
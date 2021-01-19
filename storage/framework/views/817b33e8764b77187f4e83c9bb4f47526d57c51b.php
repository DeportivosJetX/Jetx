

<?php $__env->startSection('title', 'Rotación de productos'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/rotacion.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <h1 id="iniciar">Rotación de productos</h1>
        <div class="contenedor-tabla">
            <div class="tabla-fecha">
                <h3>Buscar Por:</h3>
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
                    <button class="buscar-btn">Buscar</button>
                </div>
            </div>
            <div class="filtro">
                <div class="content__orderBy" id="content__orderBy">
                    <p id="cont-orderBy"><span id="orderBy">Ordenar por</span><i id="listaFiltro" class="fas fa-list"></i>
                    </p>
                    <ul class="list-orderBy" id="list-orderBy">
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: A-Z"><a href="">Más vendidos</a></li>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Menos vendidos</a>
                        </li>
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
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/1.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/2.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/3.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/algo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/rotacion.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Informe de ingresos'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/rotacion.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>
    <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <h1 class="title-inform">Informe de ingresos</h1>
        
        
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('grafica-ingresos', ['usuario' => Auth::user()->id,'filtro' => $filtro,'orderBy' => $orderBy,'filtros' => $filtro])->html();
} elseif ($_instance->childHasBeenRendered('rn2ndzh')) {
    $componentId = $_instance->getRenderedChildComponentId('rn2ndzh');
    $componentTag = $_instance->getRenderedChildComponentTagName('rn2ndzh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rn2ndzh');
} else {
    $response = \Livewire\Livewire::mount('grafica-ingresos', ['usuario' => Auth::user()->id,'filtro' => $filtro,'orderBy' => $orderBy,'filtros' => $filtro]);
    $html = $response->html();
    $_instance->logRenderedChild('rn2ndzh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/filtrarProducto.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/ingresos.blade.php ENDPATH**/ ?>
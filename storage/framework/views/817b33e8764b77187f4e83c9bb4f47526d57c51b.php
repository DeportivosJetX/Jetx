<?php $__env->startSection('title', 'Rotación de productos'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/rotacion.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <h1 class="title-inform">Rotación de productos</h1>
        
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('rotacion-productos', ['usuario' => Auth::user()->id])->html();
} elseif ($_instance->childHasBeenRendered('XIZUD9a')) {
    $componentId = $_instance->getRenderedChildComponentId('XIZUD9a');
    $componentTag = $_instance->getRenderedChildComponentTagName('XIZUD9a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XIZUD9a');
} else {
    $response = \Livewire\Livewire::mount('rotacion-productos', ['usuario' => Auth::user()->id]);
    $html = $response->html();
    $_instance->logRenderedChild('XIZUD9a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/filtrarProducto.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/rotacion.blade.php ENDPATH**/ ?>
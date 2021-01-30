<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns/website#">
<?php echo $__env->make('components/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="contenedor">
        <?php echo $__env->make('components/menuResponsive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components/carritoDesplegable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="busqueda" class="busqueda">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('buscar', [])->html();
} elseif ($_instance->childHasBeenRendered('9OzVkow')) {
    $componentId = $_instance->getRenderedChildComponentId('9OzVkow');
    $componentTag = $_instance->getRenderedChildComponentTagName('9OzVkow');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9OzVkow');
} else {
    $response = \Livewire\Livewire::mount('buscar', []);
    $html = $response->html();
    $_instance->logRenderedChild('9OzVkow', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="ir-arriba" id="ir-arriba">
            <i class="fas fa-angle-up"></i>
        </div>
        <?php echo $__env->make('components/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('contenido'); ?>

        <?php echo $__env->make('components/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!--Script -->
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    <?php echo $__env->yieldContent('scriptFooter'); ?>
</body>

</html>
<?php /**PATH C:\www\jetx\resources\views/layouts/layout.blade.php ENDPATH**/ ?>
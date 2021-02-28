<?php $__env->startSection('title','Confirmar pedido'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/carrito.css')); ?>">

<style>
    * {
      box-sizing: border-box;
    }
    .content{
        grid-template-columns: 1fr;
    }
    .agregar-carrito {
    background-color: #000;
    color: #fff;
    height: 40px;
    border-radius: 9px;
    text-align: center;
    line-height: 40px;
    border: none;
    cursor: pointer;
    transition: all .5s ease;
    padding: 0 1rem;
    &:hover {
        transform: scale(0.98);
        background-color: rgba(0, 0, 0, 0.767);
    }
}
    /* Create two equal columns that floats next to each other */
    .column{
        max-height: 600px;
        overflow:auto;
        border: 1px solid #eee;
        border-radius: 20px;
    }

    .item__list__cart{
        align-items: center;
        width: 100%;
    }
    /* Clear floats after the columns */
    .row{
     display: flex;
     justify-content:space-around;
     align-items: flex-start;
     width: 100%
    }

    .yComponentWrapper {
    border:none;
    width: 100%;
    }
    @media(max-width: 991.98px){
        .row{
         display: flex;
         flex-direction: column-reverse;
         justify-content:center;
         align-items: center;
         width: 100%
        }
        .column {
         max-height: 300px;
         margin-bottom: 2rem;
        }
    }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>
<script src="<?php echo e(asset('splide-2.4.12/dist/js/splide.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sliderDetalle.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="content">
        <div class="row" >
            <div class="">
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                <form method="POST" action="<?php echo e(route('pedido.store')); ?>" >
                    <?php echo csrf_field(); ?>

                    <!-- Name -->
                    <div>
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'name','value' => __('Name')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Name'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'name','class' => 'block mt-1 w-full','type' => 'text','name' => 'name','value' => old('name',Auth::user()->name),'autofocus' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'name','class' => 'block mt-1 w-full','type' => 'text','name' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name',Auth::user()->name)),'autofocus' => true]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>

                    <!-- Identification -->
                    <div class="mt-4">
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'identification','value' => __('Identification')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'identification','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Identification'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'identification','class' => 'block mt-1 w-full','type' => 'text','name' => 'identification','value' => old('identification',Auth::user()->identification)]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'identification','class' => 'block mt-1 w-full','type' => 'text','name' => 'identification','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('identification',Auth::user()->identification))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>

                    <!-- Adress -->
                    <div class="mt-4">
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'address','value' => __('Address')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'address','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Address'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'address','class' => 'block mt-1 w-full','type' => 'text','name' => 'address','value' => old('address',Auth::user()->address)]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'address','class' => 'block mt-1 w-full','type' => 'text','name' => 'address','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('address',Auth::user()->address))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                    <div class="mt-4">
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'especificacion','value' => __('Especificación')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'especificacion','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Especificación'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'especificacion','class' => 'block mt-1 w-full','type' => 'text','name' => 'especificacion','value' => old('especificacion')]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'especificacion','class' => 'block mt-1 w-full','type' => 'text','name' => 'especificacion','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('especificacion'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('departamento-ciudad', [])->html();
} elseif ($_instance->childHasBeenRendered('NhioUMp')) {
    $componentId = $_instance->getRenderedChildComponentId('NhioUMp');
    $componentTag = $_instance->getRenderedChildComponentTagName('NhioUMp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NhioUMp');
} else {
    $response = \Livewire\Livewire::mount('departamento-ciudad', []);
    $html = $response->html();
    $_instance->logRenderedChild('NhioUMp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <div class="mt-4">
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'telefono','value' => __('Telefono')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'telefono','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Telefono'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'telefono','class' => 'block mt-1 w-full','type' => 'tel','name' => 'telefono','value' => old('telefono')]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'telefono','class' => 'block mt-1 w-full','type' => 'tel','name' => 'telefono','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('telefono'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                    <br>
                    <button type="submit" id="shopify_add_to_cart" class="agregar-carrito" data-toggle="modal" data-target="#exampleModal">
                        <i class="fab fa-shopify"></i> Confirmar pedido
                    </button>
                </form>
            </div>

            <div class="column">
                <div class="yCmsComponent yComponentWrapper">
                    <div class="cart-item-list">
                        <ul class="item__list item__list__cart">
                            <?php
                            $subtotal = 0;
                            ?>
                            <?php if(session()->has('carrito')): ?>
                            <?php $__empty_1 = true; $__currentLoopData = session('carrito'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="item__list--item ">
                                <div class="item__main">
                                    <div class="item-column item__image">
                                        <a title="" href="<?php echo e(route('productos.show',$car['producto'])); ?>">
                                            <img loading="lazy" alt="" title="" aling="left" width="100" src="<?php echo e(Storage::url($car['producto']->imagenProductos[0]->nombre_imagen)); ?>" style="opacity: 1;">
                                        </a>
                                    </div>
                                    <div class="item-column item__info">
                                        <a href="<?php echo e(route('productos.show',$car['producto'])); ?>">
                                            <span class="item__name"><?php echo e($car['producto']->nombre); ?></span>
                                        </a>
                                        <span class="talla-producto">Talla: <?php echo e($car['tallaN']); ?></span>
                                    </div>
                                </div>
                                <div class="item-column">
                                    <div class="form-check radio-green">
                                        <div class="delivery-text">Envío <span class="cart-free-delivery">gratis</span></div>
                                        <div class="label-green-check"><figure class="icon-truck"></figure></div>
                                    </div>
                                </div>
                                <div class="item-column item__price">
                                    <div class="align-items">
                                        <span class="item__price__main">
                                            <?php echo e(number_format($car['producto']->costo*$car['cantidad'])); ?>

                                            <?php
                                                $subtotal += $car['producto']->costo*$car['cantidad']
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="item-column item__quantity">
                                    <div class="form-group red-arrow item__quantity__form">
                                        <label for="quantity0">
                                            Cantidad:
                                        </label>
                                        <span class="plain-select">
                                            <?php echo e($car['cantidad']); ?>

                                        </span>
                                    </div>
                                </div>
                            </li>
                            <br>
                            <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="item__list--item ">Carrito vacío</li>
                            <?php endif; ?>
                            <?php else: ?>
                            <li class="item__list--item ">Carrito vacío</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-md hidden-lg">
                            <div class="mobile-cart-totals">
                                <div class="col-xs-6 cart-totals-left mycart mycart__discount--total mycart--bold grand-total">
                                    Total
                                </div>
                                <div class="col-xs-6 cart-totals-right text-right grand-total mycart mycart__title mycart--bold">
                                    $<?php echo e(number_format($subtotal)); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
    <script src="<?php echo e(asset('js/algo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/irAPagar.blade.php ENDPATH**/ ?>
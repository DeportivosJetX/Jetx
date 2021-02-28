<?php $__env->startSection('title','Detalle Producto'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('splide-2.4.12/dist/css/splide.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/detalle.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptHeader'); ?>
<script src="<?php echo e(asset('splide-2.4.12/dist/js/splide.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sliderDetalle.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <main class="content">
        <div class="slider-producto">
            <div class="splide__container">
                <div id="primary-slider" class="splide p-splide--primary" data-splide='{"arrows":<?php echo e(splide($productos->imagenProductos)); ?>}'>
                    <div class="splide__track splide__track--primary">
                        <ul class="splide__list">
                            <?php $__currentLoopData = $productos->imagenProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="splide__slide p-splide__slide">
                                    <?php if($productos->cantidad > 0 || $productos->descuento <= 0): ?>
                                    <div class="complements">
                                        <?php if($productos->cantidad<=0): ?>
                                        <span class="agotado">AGOTADO</span>
                                        <?php endif; ?>
                                        <?php if($productos->descuento > 0): ?>
                                        <span class="descuento"><?php echo e(intval($productos->descuento*100)); ?> % OFF</span>
                                        <?php endif; ?>
                                    </div>
                                    <?php else: ?>
                                    <div class="complements">
                                        <span class="agotado">AGOTADO</span>
                                        <span class="descuento"><?php echo e(intval($productos->descuento*100)); ?> % OFF</span>
                                    </div>
                                    <?php endif; ?>
                                    <img class="card-producto__img" data-splide-lazy="<?php echo e(Storage::url($img->nombre_imagen)); ?>" alt="<?php echo e($img->descripcion); ?>">
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div id="secondary-slider" class="splide p-splide--secundary" data-splide="">
                    <div class="splide__track splide__track--secundary">
                        <ul class="splide__list splide__list--secundary">
                            <?php $__currentLoopData = $productos->imagenProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="splide__slide p-splide__slide">
                                    <img class="card-producto__img" data-splide-lazy="<?php echo e(Storage::url($img->nombre_imagen)); ?>" alt="<?php echo e($img->descripcion); ?>">
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="detalle-producto">
            <h1 class="titulo-producto"><?php echo e($productos->nombre); ?></h1>
            <div class="Precio-stock-producto">
                <div>
                    <p class="Precio-stock-producto__precio">$<?php echo e(number_format($productos->costo)); ?></p>
                </div>
                <div class="Precio-stock-producto__stock <?php echo e(stock($productos->tallas[0]->tallaProducto->stock)); ?>" id="producto-stock"></div>
            </div>
            <div class="descripcion-producto">
                <p>
                    <?php echo $productos->descripcion; ?>

                </p>
            </div>
            <div class="guiaTalla-producto">
                <button id="guiaTallas" class="guiaTallas"><i class="fas fa-ruler"></i> Guía De Tallas</button>
                <div id="modal-guia" class="modal-guia">
                    <i class="fas fa-times" id="close-modal-guia"></i>
                    <div class="modal-content">
                        <img loading="lazy" class="imagen-guiaTalla" src="<?php echo e(Storage::url($productos->guia_tallas_img)); ?>" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="tallas-producto">
                
                <form method="post" action="<?php echo e(route('carrito.store',$productos)); ?>" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <select name="id_talla" id="product-select" class="hiddenn">
                        <?php $__currentLoopData = $productos->tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($talla->tallaProducto->estado == 'disponible'): ?>
                        <option value="<?php echo e($talla->id); ?>" data-value="<?php echo e($talla->id); ?>" data-cantidad="<?php echo e($talla->tallaProducto->stock); ?>"><?php echo e($talla->nombre); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br/>
                    <div class="tallas-seleccion">
                        <h4 class="show-talla">Talla:
                            <span class="selected-talla" id="selected-talla"><?php echo e($productos->tallas[0]->nombre); ?></span>
                        </h4>
                        <br/>
                        <?php if(count($productos->tallas)>1): ?>
                        <ul class="talla-lista">
                            <?php $__currentLoopData = $productos->tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($talla->tallaProducto->estado == 'disponible'): ?>
                            <li class="talla-lista__item <?php echo e(tActive($loop->index)); ?> <?php echo e(sinStock($talla->tallaProducto->stock)); ?>" data-value="<?php echo e($talla->id); ?>" data-text="<?php echo e($talla->nombre); ?>" data-estado="<?php echo e($talla->tallaProducto->estado); ?>" data-cantidad="<?php echo e($talla->tallaProducto->stock); ?>">
                                <span><?php echo e($talla->nombre); ?></span>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <br/>
                    <br/>
                    <div class="">
                        <p class="no-stock <?php echo e(tActive($productos->tallas[0]->tallaProducto->stock)); ?>" id="no-stock"><i class="fas fa-exclamation-circle"></i>Prenda No Disponible</p>
                        <?php if($productos->cantidad>=0): ?>
                        <div class="cantidad-agregar <?php echo e(ocultarCantidad($productos->tallas[0]->tallaProducto->stock)); ?>">
                            <div class="cantidad-producto" id="cantidad-producto">
                                <div class="arriba-abajo menos">
                                    <a class="cantidad-abajo cantidad-botones fas fa-angle-down" id="cantida-down">
                                    </a>
                                </div>
                                <input type="number" max="<?php echo e($productos->tallas[0]->tallaProducto->stock); ?>" min="1" id="cantidad" name="cantidad" value="1" class="input-cantidad">
                                <div class="arriba-abajo mas">
                                    <a class="cantidad-arriba cantidad-botones fas fa-angle-up" id="cantida-up">
                                    </a>
                                </div>
                            </div>
                            <button type="submit" id="shopify_add_to_cart" class="agregar-carrito">
                                <i class="fas fa-cart-plus"></i> Añadir al carrito
                            </button>
                        </div>
                        <?php endif; ?>
                        <div class="contactanos <?php echo e(tActive($productos->tallas[0]->tallaProducto->stock)); ?>" id="contactanos">
                            <button class="open-Contacto-talla" type="button">
                                <span class="Modal-Contacto-talla__title">SOLICITAR STOCK</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptFooter'); ?>
<script src="<?php echo e(asset('js/detalleProducto.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\jetx\resources\views/detalleProducto.blade.php ENDPATH**/ ?>
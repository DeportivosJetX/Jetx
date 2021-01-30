<div class="menu-responsive carrito-fijo" id="contenedor-carrito">
    <div class="menu-container">
        <div class="menu-header">
            <h3 id="close-carrito" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Carrito</h3>
        </div>
        <div class="menu-content">
            <div class="menu-content__scroll">
                <ul class="carrito-contenido__lista">
                    <li class="carrito-contenido__item carrito-contenido__vacio"><i class="addCarrito"></i> <span>No tienes productos en el carrito.</span></li>
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="{{ Storage::url('images/productos/1.JPG') }}" alt="accesorios">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto">Nombre Producto</a>
                            <span class="talla-producto">Talla: S</span>
                            <span class="cantidad-producto">Cantidad: 2</span>
                            <span class="precio-producto">$180.000</span>
                        </div>
                    </li>
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="{{ Storage::url('images/productos/2.JPG') }}" alt="accesorios">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto">Nombre Producto</a>
                            <span class="talla-producto">Talla: S</span>
                            <span class="cantidad-producto">Cantidad: 2</span>
                            <span class="precio-producto">$180.000</span>
                        </div>
                    </li>
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="{{ Storage::url('images/productos/3.JPG') }}" alt="accesorios">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto">Nombre Producto</a>
                            <span class="talla-producto">Talla: S</span>
                            <span class="cantidad-producto">Cantidad: 2</span>
                            <span class="precio-producto">$180.000</span>
                        </div>
                    </li>
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="{{ Storage::url('images/productos/4.JPG') }}" alt="accesorios">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto">Nombre Producto</a>
                            <span class="talla-producto">Talla: S</span>
                            <span class="cantidad-producto">Cantidad: 2</span>
                            <span class="precio-producto">$180.000</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="menu-content__footer">
                <p class="menu-content__footer__subtotal"><span class="subtotal">Subtotal:</span><span class="subtotal-valor">$0</span></p>
                <div class="menu-content__footer__botones">
                    <a href="">Ver mi carrito</a>
                    <a href="">Ir a pagar</a>
                </div>
            </div>
        </div>
    </div>
</div>

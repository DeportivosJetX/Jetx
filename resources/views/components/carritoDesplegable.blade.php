<div class="menu-responsive carrito-fijo" id="contenedor-carrito">
    <div class="menu-container">
        <div class="menu-header">
            <h3 id="close-carrito" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Carrito</h3>
        </div>
        <div class="menu-content">
            <div class="menu-content__scroll">
                <ul class="carrito-contenido__lista">
                    @php 
                    $subtotal = 0;
                    @endphp
                    @if(session()->has('carrito'))
                    @forelse (session('carrito') as $car)
                    <li class="carrito-contenido__item">
                        <div class="carrito-contenido__item__img">
                            <img loading="lazy" src="{{ Storage::url($car['producto']->imagenProductos[0]->nombre_imagen) }}" alt="{{$car['producto']->nombre}}">
                        </div>
                        <div class="carrito-contenido__item__detalle">
                            <a href="" class="nombre-producto">{{$car['producto']->nombre}}</a>
                            <span class="talla-producto">Talla: {{ $car['tallaN'] }}</span>
                            <span class="cantidad-producto">Cantidad: {{ $car['cantidad'] }}</span>
                            <span class="precio-producto">{{$car['producto']->costo}}</span>
                        </div>
                    </li>
                    @php 
                    $subtotal += $car['producto']->costo*$car['cantidad'];
                    @endphp
                    @empty
                    <li class="carrito-contenido__item carrito-contenido__vacio"><i class="addCarrito"></i> <span>No tienes productos en el carrito.</span></li> 
                    @endforelse   
                    @else
                    <li class="carrito-contenido__item carrito-contenido__vacio"><i class="addCarrito"></i> <span>No tienes productos en el carrito.</span></li>
                    @endif
                </ul>
            </div>
            <div class="menu-content__footer">
                <p class="menu-content__footer__subtotal"><span class="subtotal">Subtotal:</span><span class="subtotal-valor">${{ (isset($subtotal)) ? number_format($subtotal):"0" }}</span></p>
                <div class="menu-content__footer__botones">
                    <a href="{{ route('carrito.index') }}">Ver mi carrito</a>
                    <a href="{{ route('carrito.confirmo') }}">Ir a pagar</a>
                </div>
            </div>
        </div>
    </div>
</div>

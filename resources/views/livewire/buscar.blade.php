<div class="busqueda-component">
    <div class="busqueda__header">
        <div class="busqueda__input">
            <label for="input-buscar" class="fas fa-search"></label>
            <input
            id="input-buscar"
            type="search"
            placeholder="Buscar productos"
            wire:model="search">
        </div>
        <div id="busqueda__close" class="busqueda__close close-menu">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <div class="busqueda__contenido">
        <ul id="busqueda__lista" class="busqueda__lista">
            @if($search != "")
            @forelse($pSearch as $producto)
            <li class="busqueda__item">
                <a href="{{ route('productos.show',$producto) }}">
                    <div class="busqueda__item__img">
                        <img loading="lazy" src="{{ Storage::url($producto->imagenProductos[0]->nombre_imagen) }}" alt="{{ $producto->imagenProductos[0]->descripcion }}">
                    </div>
                    <div class="busqueda__item__detalle">
                        <span class="nombre-producto">{{ $producto->nombre }}</span>
                        @if($producto->descuento > 0)
                        <span style="color:#ff0000">SALE</span>
                        <span style="opacity: .5;text-decoration:line-through;" class="precio-producto">${{ number_format($producto->costo)  }}</span>
                        <span class="precio-producto">${{ number_format(($producto->costo) - ($producto->costo*$producto->descuento))  }}</span>
                        @else
                        <span class="precio-producto">${{ number_format($producto->costo)  }}</span>
                        @endif
                    </div>
                </a>
            </li>
            @empty
            <li class="busqueda__item sin-resultados">
                <span>¡No se encontraron resultados!</span>
            </li>
            @endforelse
            @endif
        </ul>
    </div>
</div>

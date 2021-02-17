<div class="content__body">
    @isset($productos)
        @forelse($productos as $producto)
        <div class="card-producto">
            <a href="{{ route('productos.show',$producto) }}" class="card-producto__link">
            {{-- <a href="" class="card-producto__link"> --}}
                @if($producto->cantidad > 0 || $producto->descuento <= 0)
                <div class="complements">
                    @if($producto->cantidad<=0)
                    <span class="agotado">AGOTADO</span>
                    @endif
                    @if($producto->descuento > 0)
                    <span class="descuento">{{ intval($producto->descuento*100) }} % OFF</span>
                    @endif
                </div>
                @else
                <div class="complements">
                    <span class="agotado">AGOTADO</span>
                    <span class="descuento">{{ intval($producto->descuento*100) }} % OFF</span>
                </div>
                @endif
                <img loading="lazy" class="card-producto__img" src="{{ Storage::url($producto->imagenProductos[0]->nombre_imagen) }}" alt="{{ $producto->imagenProductos[0]->descripcion }}">
            </a>
            <div class="card-producto__body">
                <h5 class="card-producto__title">{{ $producto->nombre }}</h5>
                <p class="card-producto__precio">
                    @if($producto->descuento > 0)
                    <span style="opacity: .5;text-decoration:line-through;">${{ number_format($producto->precio)  }}</span> |
                    <span>${{ number_format(($producto->costo) - ($producto->costo*$producto->descuento))  }}</span>
                    @else
                    <span>${{ number_format($producto->costo)  }}</span>
                    @endif
                </p>
            </div>
        </div>
        @empty
        @endforelse
    @endisset
</div>
@isset($productos)
    @isset($sort_by)
    {{ $productos->appends(['sort_by' => $sort_by])->links() }}
    @else
    {{ $productos->links() }}
    @endisset
@endisset


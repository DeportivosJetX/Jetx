@extends('layouts/layout')

@section('title','Detalle Producto')
@section('css')
<link rel="stylesheet" href="{{ asset('splide-2.4.12/dist/css/splide.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/detalle.css') }}">
@endsection
@section('scriptHeader')
<script src="{{ asset('splide-2.4.12/dist/js/splide.min.js') }}"></script>
<script src="{{ asset('js/sliderDetalle.js') }}"></script>
@endsection
@section('contenido')
    <main class="content">
        <div class="slider-producto">
            <div class="splide__container">
                <div id="primary-slider" class="splide p-splide--primary" data-splide='{"arrows":{{ splide($productos->imagenProductos) }}}'>
                    <div class="splide__track splide__track--primary">
                        <ul class="splide__list">
                            @foreach($productos->imagenProductos as $img)
                                <li class="splide__slide p-splide__slide">
                                    @if($productos->cantidad > 0 || $productos->descuento <= 0)
                                    <div class="complements">
                                        @if($productos->cantidad<=0)
                                        <span class="agotado">AGOTADO</span>
                                        @endif
                                        @if($productos->descuento > 0)
                                        <span class="descuento">{{ intval($productos->descuento*100) }} % OFF</span>
                                        @endif
                                    </div>
                                    @else
                                    <div class="complements">
                                        <span class="agotado">AGOTADO</span>
                                        <span class="descuento">{{ intval($productos->descuento*100) }} % OFF</span>
                                    </div>
                                    @endif
                                    <img class="card-producto__img" data-splide-lazy="{{ Storage::url($img->nombre_imagen) }}" alt="{{ $img->descripcion }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="secondary-slider" class="splide p-splide--secundary" data-splide="">
                    <div class="splide__track splide__track--secundary">
                        <ul class="splide__list splide__list--secundary">
                            @foreach($productos->imagenProductos as $img)
                                <li class="splide__slide p-splide__slide">
                                    <img class="card-producto__img" data-splide-lazy="{{ Storage::url($img->nombre_imagen) }}" alt="{{ $img->descripcion }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="detalle-producto">
            <h1 class="titulo-producto">{{ $productos->nombre }}</h1>
            <div class="Precio-stock-producto">
                <div>
                    <p class="Precio-stock-producto__precio">${{ number_format($productos->costo)  }}</p>
                </div>
                <div class="Precio-stock-producto__stock {{ stock($productos->tallas[0]->tallaProducto->stock) }}" id="producto-stock"></div>
            </div>
            <div class="descripcion-producto">
                <p>
                    {!! $productos->descripcion  !!}
                </p>
            </div>
            <div class="guiaTalla-producto">
                <button id="guiaTallas" class="guiaTallas"><i class="fas fa-ruler"></i> Guía De Tallas</button>
                <div id="modal-guia" class="modal-guia">
                    <i class="fas fa-times" id="close-modal-guia"></i>
                    <div class="modal-content">
                        <img loading="lazy" class="imagen-guiaTalla" src="{{ Storage::url($productos->guia_tallas_img) }}" alt="">
                        {{-- <p class="descripcion-guia">*tolerancia en medidas 0,5 centimetros aprox<br></p> --}}
                    </div>
                </div>
            </div>
            <div class="tallas-producto">
                {{-- <form method="post" action="{{ route('carrito.store') }}" accept-charset="utf-8" enctype="multipart/form-data"> --}}
                <form method="post" action="" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                    <select name="id_talla" id="product-select" class="hidden">
                        @foreach($productos->tallas as $talla)
                        @if($talla->tallaProducto->estado == 'disponible')
                        <option value="{{ $talla->id }}" data-value="{{ $talla->id  }}" data-cantidad="{{ $talla->tallaProducto->stock }}">{{ $talla->nombre }}</option>
                        @endif
                        @endforeach
                    </select>
                    <br/>
                    <div class="tallas-seleccion">
                        <h4 class="show-talla">Talla:
                            <span class="selected-talla" id="selected-talla">{{ $productos->tallas[0]->nombre }}</span>
                        </h4>
                        <br/>
                        @if(count($productos->tallas)>1)
                        <ul class="talla-lista">
                            @foreach($productos->tallas as $talla)
                            @if($talla->tallaProducto->estado == 'disponible')
                            <li class="talla-lista__item {{ tActive($loop->index) }} {{ sinStock($talla->tallaProducto->stock) }}" data-value="{{ $talla->id }}" data-text="{{ $talla->nombre }}" data-estado="{{ $talla->tallaProducto->estado }}" data-cantidad="{{ $talla->tallaProducto->stock }}">
                                <span>{{ $talla->nombre }}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <br/>
                    <div class="">
                        <p class="no-stock {{ tActive($productos->tallas[0]->tallaProducto->stock) }}" id="no-stock"><i class="fas fa-exclamation-circle"></i>Prenda No Disponible</p>
                        {{-- @if($productos->cantidad>=0)
                        <div class="cantidad-agregar {{ ocultarCantidad($productos->tallas[0]->tallaProducto->stock) }}">
                            <div class="cantidad-producto" id="cantidad-producto">
                                <div class="arriba-abajo menos">
                                    <a class="cantidad-abajo cantidad-botones fas fa-angle-down" id="cantida-down">
                                    </a>
                                </div>
                                <input type="number" step="1" min="1" max="{{ $productos->tallas[0]->tallaProducto->stock }}" name="cantidad" id="cantidad" value="1" title="cantidad" class="input-cantidad">
                                <div class="arriba-abajo mas">
                                    <a class="cantidad-arriba cantidad-botones fas fa-angle-up" id="cantida-up">
                                    </a>
                                </div>
                            </div>
                            <button type="submit" id="shopify_add_to_cart" class="agregar-carrito">
                                <i class="fas fa-cart-plus"></i> Añadir al carrito
                            </button>
                        </div>
                        @endif
                        <div class="contactanos {{ tActive($productos->tallas[0]->tallaProducto->stock) }}" id="contactanos">
                            <button class="open-Contacto-talla" type="button">
                                <span class="Modal-Contacto-talla__title">SOLICITAR STOCK</span>
                            </button>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
@section('scriptFooter')
<script src="{{ asset('js/detalleProducto.js') }}"></script>
@endsection

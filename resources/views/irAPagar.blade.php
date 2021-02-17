@extends('layouts/layout')

@section('title','Confirmar pedido')
@section('css')

<style>
    * {
      box-sizing: border-box;
    }
    .content{
        grid-template-columns: 1fr;
    }
    /* Create two equal columns that floats next to each other */
    .column {

    }

    /* Clear floats after the columns */
    .row{
     display: flex;
     justify-content:space-around;
     align-items: flex-start;
     width: 100%
    }
    </style>
@endsection
@section('scriptHeader')
<script src="{{ asset('splide-2.4.12/dist/js/splide.min.js') }}"></script>
<script src="{{ asset('js/sliderDetalle.js') }}"></script>
@endsection
@section('scriptHeader')

@section('contenido')
    <div class="content">
        <div class="row" >
            <div class="column">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('pedido.store') }}" >
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',Auth::user()->name)"  autofocus />
                    </div>

                    <!-- Identification -->
                    <div class="mt-4">
                        <x-label for="identification" :value="__('Identification')" />

                        <x-input id="identification" class="block mt-1 w-full" type="text" name="identification" :value="old('identification',Auth::user()->identification)" />
                    </div>

                    <!-- Adress -->
                    <div class="mt-4">
                        <x-label for="address" :value="__('Address')" />

                        <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address',Auth::user()->address)"  />
                    </div>
                    <div class="mt-4">
                        <x-label for="especificacion" :value="__('Especificación')" />

                        <x-input id="especificacion" class="block mt-1 w-full" type="text" name="especificacion" :value="old('especificacion')"  />
                    </div>

                    <livewire:departamento-ciudad />
                    <div class="mt-4">
                        <x-label for="telefono" :value="__('Telefono')" />

                        <x-input id="telefono" class="block mt-1 w-full"
                                        type="tel"
                                        name="telefono"
                                        :value="old('telefono')" />
                    </div>
                    <br>
                    <button type="submit" id="shopify_add_to_cart" class="agregar-carrito" data-toggle="modal" data-target="#exampleModal">
                        <i class="fab fa-shopify"></i> Confirmar pedido
                    </button>
                </form>
            </div>

            <div class="column" style="max-height: 600px;overflow:auto;">
                <div class="yCmsComponent yComponentWrapper">
                    <div class="cart-item-list">
                        <ul class="item__list item__list__cart">
                            @php
                            $subtotal = 0;
                            @endphp
                            @if(session()->has('carrito'))
                            @forelse (session('carrito') as $car)
                            <li class="item__list--item ">
                                <div class="item__main">
                                    <div class="item-column item__image">
                                        <a title="" href="{{ route('productos.show',$car['producto']) }}">
                                            <img loading="lazy" alt="" title="" aling="left" width="100" src="{{Storage::url($car['producto']->imagenProductos[0]->nombre_imagen)}}" style="opacity: 1;">
                                        </a>
                                    </div>
                                    <div class="item-column item__info">
                                        <a href="{{ route('productos.show',$car['producto']) }}">
                                            <span class="item__name">{{$car['producto']->nombre}}</span>
                                        </a>
                                        <span class="talla-producto">Talla: {{ $car['tallaN'] }}</span>
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
                                            {{ number_format($car['producto']->costo*$car['cantidad']) }}
                                            @php
                                                $subtotal += $car['producto']->costo*$car['cantidad']
                                            @endphp
                                        </span>
                                    </div>
                                </div>
                                <div class="item-column item__quantity">
                                    <div class="form-group red-arrow item__quantity__form">
                                        <label for="quantity0">
                                            Cantidad:
                                        </label>
                                        <span class="plain-select">
                                            {{ $car['cantidad'] }}
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <br>
                            <hr>
                            @empty
                                <li class="item__list--item ">Carrito vacío</li>
                            @endforelse
                            @else
                            <li class="item__list--item ">Carrito vacío</li>
                            @endif
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-md hidden-lg">
                            <div class="mobile-cart-totals">
                                <div class="col-xs-6 cart-totals-left mycart mycart__discount--total mycart--bold grand-total">
                                    Total
                                </div>
                                <div class="col-xs-6 cart-totals-right text-right grand-total mycart mycart__title mycart--bold">
                                    ${{number_format($subtotal)}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/algo.js') }}"></script>
@endsection

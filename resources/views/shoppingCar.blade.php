{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
@extends('layouts/layout')
@section('title','Carrito')

@section('contenido')
<div class="row cart-content content">
    <h1 class="mb:4">CARRITO DE COMPRAS</h1>
    @isset($error)
        <span>{{$error}}</span>
    @endisset
    <div class="cart-content__productList">
        <div class="cart-info">
            <h4 class="font-title font-title--sub-title-3 ">
                @if (session()->has('carrito'))
                    Productos en el carrito:<span>({{count(session('carrito'))}})</span>
                    @else
                    Productos en el carrito:<span>(0)</span>
                    @endif
            </h4>
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
                                        <img loading="lazy" alt="" title="" width="100" src="{{Storage::url($car['producto']->imagenProductos[0]->nombre_imagen)}}" style="opacity: 1;">
                                    </a>
                                </div>
                                <div class="item-column item__info">
                                    <a href="{{ route('productos.show',$car['producto']) }}">
                                        <span class="item__name">{{$car['producto']->nombre}}</span>
                                    </a>
                                    <span class="talla-producto">Talla: {{ $car['tallaN'] }}</span>
                                    <div class="item__interactions hidden-xs hidden-sm">
                                        <form action="{{ route('carrito.delete',($loop->index)) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item__interactions__button">
                                                <i class="icon-bin"></i> Eliminar
                                            </button>
                                        </form>
                                        
                                    </div>
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
                                <div class="item__interactions hidden-md hidden-lg">
                                    <form action="{{ route('carrito.delete',($loop->index)) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="item__interactions__button">
                                            <i class="icon-bin"></i> Eliminar
                                        </button>
                                    </form>
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
                    <div class="col-xs-12 pull-right cart-actions--print">
                        <div class="cart-bottom-actions">
                            <div class="cart-bottom-actions__continue">
                                <a class="ktronix-cart-action btn button-variant btn-default btn-default--white btn--continue-shopping js-continue-shopping-button " href="{{ route('productos.index')}}" >Continuar comprando</a>
                            </div>
                            <div class="cart-bottom-actions__checkout">
                                <a class="btn button-variant btn-default btn-default--green btn--continue-checkout " href="{{ route('carrito.confirmo')}}" >Ir a pagar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


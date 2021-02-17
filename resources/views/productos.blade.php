@extends('layouts/layout')

@section('title','Productos')
@section('css')
<link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endsection
@section('scriptHeader')

@endsection
@section('contenido')
<main class="content-home">
    <div class="content">
            <div class="content__title">
                @isset($title)
                <h2 class="">{{ strtoupper($title) }}</h2>
                @else
                <h2 class="">PRODUCTOS</h2>
                @endisset
                {{-- {{ sortByActive('sort_by=title-descending') }}
                {{ dd(request()->sort_by) }} --}}
            </div>
            <div class="content__orderBy" id="content__orderBy">
                <p id="cont-orderBy"><span id="orderBy">Alfabéticamente: A-Z</span><i id="listaFiltro" class="fas fa-list"></i></p>
                <ul class="list-orderBy" id="list-orderBy">
                    <li class="list-orderBy__item {{ sortByActive('title-ascending') }}" data-filtro="Alfabéticamente: A-Z"><a href="{{ request()->url() }}?sort_by=title-ascending">Alfabéticamente: A-Z</a></li>
                    <li class="list-orderBy__item {{ sortByActive('title-descending') }}" data-filtro="Alfabéticamente: Z-A"><a href="{{ request()->url() }}?sort_by=title-descending">Alfabéticamente: Z-A</a></li>
                    <li class="list-orderBy__item {{ sortByActive('price-ascending') }}" data-filtro="Precio: Menor a mayor"><a href="{{ request()->url() }}?sort_by=price-ascending">Precio: Menor a mayor</a></li>
                    <li class="list-orderBy__item {{ sortByActive('price-descending') }}" data-filtro="Precio: Mayor a menor"><a href="{{ request()->url() }}?sort_by=price-descending">Precio: Mayor a menor</a></li>
                    <li class="list-orderBy__item {{ sortByActive('created-descending') }}" data-filtro="Fecha: Mas nuevo"><a href="{{ request()->url() }}?sort_by=created-descending">Fecha: Mas nuevo</a></li>
                    <li class="list-orderBy__item {{ sortByActive('created-ascending') }}" data-filtro="Fecha: Mas antiguo"><a href="{{ request()->url() }}?sort_by=created-ascending">Fecha: Mas antiguo</a></li>
                    <li class="list-orderBy__item {{ sortByActive('best-selling') }}" data-filtro="Más vendidos"><a href="{{ request()->url() }}?sort_by=best-selling">Más vendidos</a></li>
                </ul>
            </div>
        </div>
        <div id="content-products" class="collection-products">
            @include('productData')
        </div>
    </main>
@endsection
@section('scriptFooter')
<script src="{{ asset('js/filtrarProducto.js') }}"></script>
@endsection

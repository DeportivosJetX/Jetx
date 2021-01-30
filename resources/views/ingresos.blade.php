@extends('layouts/layout')

@section('title', 'Informe de ingresos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/rotacion.css') }}">
@endsection
@section('scriptHeader')
    <script src="{{ asset('js/Chart.min.js') }}"></script>

@endsection

@section('contenido')
    <div class="content">
        <h1 class="title-inform">Informe de ingresos</h1>
        {{-- <p>
            filtro: {{ $filtro }}<br>
            orderBy: {{ $orderBy }}<br>
        </p> --}}
        @php
            $user = 1; //id del usuario logueado
        @endphp
        {{-- <livewire:rotacion-productos usuario="2"/> --}}
        <livewire:grafica-ingresos :usuario="$user" :filtro="$filtro" :orderBy="$orderBy" :filtros="$filtro"/>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/filtrarProducto.js') }}"></script>
@endsection

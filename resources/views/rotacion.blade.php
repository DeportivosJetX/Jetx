@extends('layouts/layout')

@section('title', 'Rotación de productos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/rotacion.css') }}">
@endsection

@section('contenido')
    <div class="content">
        <h1 class="title-inform">Rotación de productos</h1>
        {{-- @php
            $user = 1; //id del usuario logueado
        @endphp --}}
        {{-- <livewire:rotacion-productos usuario="2"/> --}}
        <livewire:rotacion-productos :usuario="Auth::user()->id"/>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/filtrarProducto.js') }}"></script>
@endsection

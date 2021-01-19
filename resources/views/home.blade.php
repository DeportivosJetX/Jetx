@extends('layouts/layout')

@section('title')
 Home
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glider.min.css') }}">
@endsection
@section('scriptHeader')
    <script src="{{ asset('js/glider.min.js') }}"></script>
    <script src="{{ asset('js/gliderApp.js') }}"></script>
@endsection
@section('contenido')
    <main class="content-home">
        <div class="content">
            {{-- @forelse(session('categoria') as $categoria) --}}
            <div class="imgcat">
                {{-- <a href="{{ route('productos.indexCategoria',$categoria) }}" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="{{ Storage::url($categoria->imagen) }}" alt="{{ $categoria->descripcion_img }}">
                    <div class="overlay">
                        <p class="text">{{ $categoria->nombre }}</p>
                    </div>
                    <!-- overlay -->
                </a> --}}
            </div>
            {{-- @empty --}}

            {{-- @endforelse --}}
        </div>
    </main>
@endsection

@extends('layouts/layout')

@section('title', 'HOME')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scriptHeader')

@endsection

@section('contenido')
    <main class="content-home">
        <div class="content">
            @forelse(session('deportes') as $deporte)
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="{{ Storage::url($deporte->imagen) }}" alt="{{ $deporte->descripcion_img }}">
                    <div class="overlay">
                        <p class="text">{{ $deporte->nombre }}</p>
                    </div>
                </a>
            </div>
            @empty

            @endforelse
        </div>
    </main>
@endsection

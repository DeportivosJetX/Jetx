@extends('layouts/layout')

@section('title', 'HOME')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection
@section('scriptHeader')

@endsection

@section('contenido')
    <div class="content-home">
        <div class="content">

            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/patinaje.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Patinaje</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/futbol.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Fútbol</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/baloncesto.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Baloncesto</p>
                    </div>
                </a>
            </div>
            <div class="imgcat">
                <a href="" class="imgcat-link">
                    <img loading="lazy" class="imgcat__img" src="../storage/images/deportes/tennis.jpg" alt="">
                    <div class="overlay">
                        <p class="text">Tennis</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/algo.js') }}"></script>
@endsection

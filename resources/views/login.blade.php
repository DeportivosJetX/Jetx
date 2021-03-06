@extends('layouts/layout')

@section('title', 'Iniciar Sesión')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('scriptHeader')

@endsection

@section('contenido')
    <div class="content">
        <form action="" class="form" method="post">
            <h1 id="iniciar">Iniciar sesión</h1>

            <div class="form-datos">
                <input type="text" class="form-input input-login" placeholder="Email/Usuario" id="usuario">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-datos">
                <input type="password" class="form-input input-login" placeholder="Contraseña" id="contraseña">
                <i class="fa fa-lock"></i>
            </div>
            <div class="contenedor-btn">
                <input type="submit" class="btn-enviar" value="Entrar">
            </div>
            <div class="bottom-text">
                <div>¿Aún no estás registrado?</div>
                <a class="link" href="{{ route('register') }}">Entra aquí</a>
            </div>
        </form>
    </div>
@endsection
@section('scriptFooter')

@endsection

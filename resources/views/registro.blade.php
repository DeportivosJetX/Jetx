@extends('layouts/layout')

@section('title', 'Registrarse')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection
@section('scriptHeader')

@endsection

@section('contenido')
    <div class="content">
        <form action="" class="form" method="post">
            <h1 id="iniciar">Registro</h1>
            <fieldset>
                <legend>Datos personales</legend>
                <div class="form-datos">
                    <input type="text" class="form-input input-registro" placeholder="Nombre" id="nombre">
                </div>
                <div class="form-datos">
                    <input type="text" class="form-input input-registro" placeholder="Nro identificación"
                        id="identificacion">
                </div>
                <div class="form-datos">
                    <input type="text" class="form-input input-registro" placeholder="Dirección" id="direccion">
                </div>
                <div class="form-datos">
                    <select class="form-input input-registro" name="" id="">
                        <option value="">Departamento</option>
                        <option value="">Santander</option>
                        <option value="">Casanare</option>
                    </select>
                </div>

                <div class="form-datos">
                    <select class="form-input input-registro" name="" id="">
                        <option value="">Ciudad</option>
                        <option value="">Santander</option>
                        <option value="">Casanare</option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <legend>Usuario</legend>
                <div class="form-datos">
                    <input type="email" class="form-input input-registro" placeholder="Email/Usuario" id="email">
                </div>

                <div class="form-datos">
                    <input type="password" class="form-input input-registro" placeholder="Contraseña" id="contraseña">
                </div>

                <div class="form-datos">
                    <input type="password" class="form-input input-registro" placeholder="Confirmar contraseña"
                        id="Confirm-contraseña">
                </div>
                <div class="reg">
                    <input type="submit" class="btn-enviar" value="Crear cuenta">
                </div>
            </fieldset>
            <div class="bottom-text">
                <div>¿Ya estás registrado?</div>
                <a class="link" href="{{ route('login') }}">Entra aquí</a>
            </div>
        </form>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/algo.js') }}"></script>
@endsection

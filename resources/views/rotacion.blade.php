@extends('layouts/layout')

@section('title', 'Rotación de productos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/rotacion.css') }}">
@endsection

@section('contenido')
    <div class="content">
        <h1 id="iniciar">Rotación de productos</h1>
        <div class="contenedor-tabla">
            <div class="tabla-fecha">
                <h3>Buscar Por:</h3>
                <div class="itm">
                    <div class="itm__datos label">
                        <label for="nombre">Fecha inicio</label>
                    </div>
                    <div class="itm__datos fecha">
                        <input type="date" id="fechainicio" class="tabla-input" placeholder="" title="fechainicio">
                    </div>
                </div>
                <div class="itm">
                    <div class="itm__datos label">
                        <label for="nombre">Fecha fin</label>
                    </div>
                    <div class="itm__datos fecha">
                        <input type="date" id="fechafin" class="tabla-input" placeholder="" title="fechafin">
                    </div>
                </div>
                <div class="contenedor-btn">
                    <button class="buscar-btn">Buscar</button>
                </div>
            </div>
            <div class="filtro">
                <div class="content__orderBy" id="content__orderBy">
                    <p id="cont-orderBy"><span id="orderBy">Ordenar por</span><i id="listaFiltro" class="fas fa-list"></i>
                    </p>
                    <ul class="list-orderBy" id="list-orderBy">
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: A-Z"><a href="">Más vendidos</a></li>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Menos vendidos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contenedor-tabla-visualizar">
                <table class="tabla-visualizar">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/1.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/2.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>referencia1 <img class="image-producto" src="../storage/images/productos/3.jpg" alt=""></td>
                            <td>nombre1</td>
                            <td>Talla única</td>
                            <td>10000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
{{-- @section('contenido-modal')
<div class="contenedor-tabla-more">
    <div class="tabla-more">
        <div class="cerrar">
            <i class="fas fa-times cerrar__item"></i>
        </div>
        <div class="tabla-main">
            <div class="itm">
                <label for="datos" class="datos titulo">Información del producto</label>
            </div>
            <div class="itm">
                <div class="itm__datos imagen-prod">
                    <img src="{{ Storage::url('images/admin/slider1.jpg') }}" alt="">
                </div>
            </div>
            <div class="itm">
                <div class="itm__datos label">
                    <label for="nombre">Referencia:</label>
                </div>
                <div class="itm__datos span">
                    <span>38B1</span>
                </div>
            </div>
            <div class="itm">
                <div class="itm__datos label">
                    <label for="nombre">Nombre:</label>
                </div>
                <div class="itm__datos span">
                    <span>Bucket hat amarillo</span>
                </div>
            </div>
            <div class="itm">
                <div class="itm__datos label">
                    <label for="nombre">Talla:</label>
                </div>
                <div class="itm__datos span">
                    <label for="nombre">
                        <select name="" id="">
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">XL</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="itm">
                <div class="itm__datos label">
                    <label for="nombre">Ventas:</label>
                </div>
                <div class="itm__datos span">
                    <span>32</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@section('scriptFooter')
    <script src="{{ asset('js/algo.js') }}"></script>
@endsection

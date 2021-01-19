@extends('layouts/layout')

@section('title', 'Informe de ingresos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/rotacion.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection
@section('scriptHeader')
    <script src="{{ asset('js/Chart.min.js') }}"></script>

@endsection

@section('contenido')
    <div class="content">
        <h1 id="iniciar">Informe de ingresos</h1>
        <div class="contenedor-tabla">
            <div class="tabla-fecha">
                <h3>Buscar:</h3>
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
                    <button class="buscar-btn">Generar</button>
                </div>
            </div>
            <div class="filtro">
                <div class="content__orderBy" id="content__orderBy">
                    <p id="cont-orderBy"><span id="orderBy">Generar informe...</span><i id="listaFiltro"
                            class="fas fa-list"></i>
                    </p>
                    <ul class="list-orderBy" id="list-orderBy">
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: A-Z"><a href="">Diariamente</a></li>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Semanalmente</a>
                        <li class="list-orderBy__item " data-filtro="Alfabéticamente: Z-A"><a href="">Mensualmente</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contenedor-grafica">
                <div class="grafica">
                    <canvas id="myChart"></canvas>
                    <script>
                        var ctx1 = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                ],
                                datasets: [{
                                    label: 'Ganancias',
                                    borderColor: 'blue',
                                    data: [7, 8, 5, 2, 8, 10, 7, 0, 4, 90, 0, 5]
                                }]
                            },
                            options: {}
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptFooter')
    <script src="{{ asset('js/algo.js') }}"></script>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="canonical" href="https://www.DeportivosJetX.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#000">
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>503 En mantenimiento | JetX</title>
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}">
</head>
<body>
    <div class="contenedor">
        <div class="contenedor-error">
            <div class="svgError">
                <img src="{{ Storage::url('images/errors/503.svg') }}" alt="error 503">
            </div>
            <div class="message">
                <p style="text-align: center;">Servicio no disponible o en mantenimiento, por favor intente más tarde</p>
            </div>
        </div>
        <div class="footer">
            <img src="{{ Storage::url('images/errors/wave.svg') }}" alt="wave">
        </div>
    </div>
</body>
</html>

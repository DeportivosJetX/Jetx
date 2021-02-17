<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns/website#">
@include('components/head')
<body>
    <div class="contenedor">
        @include('components/menuResponsive')
        @include('components/carritoDesplegable')
        <div id="busqueda" class="busqueda">
            <livewire:buscar />
        </div>
        <div class="ir-arriba" id="ir-arriba">
            <i class="fas fa-angle-up"></i>
        </div>
        @include('components/header')

        @yield('contenido')

        @include('components/footer')
    </div>

    <!--Script -->
    @livewireScripts
    <script src="{{ asset('js/home.js') }}"></script>
    @yield('scriptFooter')
</body>

</html>

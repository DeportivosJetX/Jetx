<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns/website#">
@include('components/head')
<body>
    <div class="contenedor">
        @include('components/menuResponsive')
        @include('components/carritoDesplegable')
        @include('components/busqueda')
        <div class="contenedor-inicio-sesion">
            <div class="contenedor-inicio-sesion__scroll">
                <div class="contenedor-formulario">
                    <form action="" class="form-inicio-sesion" method="post">
                        <div class="cerrar-inicio-sesion">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="content-inicio-sesion">
                            <div class="form-iniciar-sesion__title">
                                <h2>Iniciar sesión</h2>
                            </div>
                            <div class="form-datos-iniciar-sesion">
                                <input type="text" class="form-input input-login" placeholder="Email/Usuario" id="usuario">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="form-datos-iniciar-sesion">
                                <input type="password" class="form-input input-login" placeholder="Contraseña" id="contraseña">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="form-iniciar-sesion__boton">
                                <input type="submit" class="btn-enviar" value="Entrar">
                            </div>
                            <div class="form-iniciar-sesion__bottom-text">
                                <p>¿Aún no estás registrado?</p>
                                <a class="link" href="#">Entra aquí</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ir-arriba" id="ir-arriba">
            <i class="fas fa-angle-up"></i>
        </div>
        @include('components/header')

        @yield('contenido')

        @include('components/footer')
    </div>

    <!--Script -->
    <script src="{{ asset('js/home.js') }}"></script>
    @yield('scriptFooter')
</body>

</html>

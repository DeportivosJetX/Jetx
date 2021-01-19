<div id="contenedor-menu-main" class="menu-responsive  menu-fijo">
    <div id="mobile-menu" class="menu-container">
        <div class="menu-header">
            <h3 id="close-menu-main" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Menú</h3>
        </div>
        <div class="scroll-menu-main">
            <ul id="menu-main" class="menu-main menu">
                <li class="menu-item active"><a href="{{ route('home') }}"><span>Home</span></a></li>
                @if(session()->has('categoria'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-producto"><span>Patinaje</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                @if(session()->has('coleccion'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Fútbol</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                @if(session()->has('coleccion'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Baloncesto</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                @if(session()->has('coleccion'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Tennis</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                <li class="menu-item iniciar-sesion"><a href="#"><span>Iniciar Sesión / Registro</span></a></li>
            </ul>
        </div>
        <div class="menu-categoria" id="menu-categoria">
            <div class="menu-header">
                <h3 class="menu-categoria__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    @if(session()->has('categoria'))
                    @forelse(session('categoria') as $categoria)
                    <a href="{{ route('productos.indexCategoria',$categoria) }}" class="menu-link" style="background-image: url('/storage/{{ $categoria->imagen }}');">
                        <div class="menu-link__title">
                            <h3>{{ strtoupper($categoria->nombre) }}</h3>
                        </div>
                    </a>
                    @empty
                        No hay categorías
                    @endforelse
                    @endif
                </div>
            </div>
        </div>
        <div class="menu-categoria" id="menu-coleccion">
            <div class="menu-header">
                <h3 class="menu-col__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    @if(session()->has('coleccion'))
                    @forelse(session('coleccion') as $coleccion)
                    <a href="{{ route('productos.indexColeccion',$coleccion) }}" class="menu-link" style="background-image: url('/storage/{{ $coleccion->imagen }}');">
                        <div class="menu-link__title">
                            <h3>{{ strtoupper($coleccion->nombre) }}</h3>
                        </div>
                    </a>
                    @empty
                        No hay colecciones
                    @endforelse
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

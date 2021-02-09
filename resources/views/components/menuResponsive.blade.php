<div id="contenedor-menu-main" class="menu-responsive  menu-fijo">
    <div id="mobile-menu" class="menu-container">
        <div class="menu-header">
            <h3 id="close-menu-main" class="close-menu menu-header__item"><i class="fas fa-times"></i></h3>
            <h3 class="menu-header__title menu-header__item">Menú</h3>
        </div>
        <div class="scroll-menu-main">
            <ul id="menu-main" class="menu-main menu">
                <li class="menu-item active"><a href="{{ route('home') }}"><span>Home</span></a></li>
                <li class="menu-item"><a href="{{ route('productos.index') }}" class="menu-main__link"><span>Productos</span></a></li>
                @if(session()->has('deportes'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-producto"><span>Deportes</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                @if(session()->has('categorias'))
                    <li class="menu-item"><a href="javascript:void(0);" class="menu-main__link" id="item-coleccion"><span>Categorias</span><i class="fas fa-angle-double-right"></i></a></li>
                @endif
                <li class="menu-item"><a href="{{ route('rotacion') }}" class="menu-main__link"><span>Informe de Rotación</span></a></li>
                <li class="menu-item"><a href="{{ route('ingresos') }}" class="menu-main__link"><span>Informe de Ingresos</span></a></li>
                <li class="menu-item iniciar-sesion"><a href="{{ route('login') }}"><span>Iniciar Sesión / Registro</span></a></li>
            </ul>
        </div>
        <div class="menu-categoria" id="menu-categoria">
            <div class="menu-header">
                <h3 class="menu-categoria__volver menu-header__item"><i class="fas fa-angle-double-left"></i><span>Volver</span></h3>
            </div>
            <div class="contenedor-scroll">
                <div class="menu-cat-contenedor">
                    @if(session()->has('deportes'))
                    @forelse(session('deportes') as $deporte)
                    <a href="{{ route('productos.indexDeporte',$deporte) }}" class="menu-link" style="background-image: url('/storage/{{ $deporte->imagen }}');">
                        <div class="menu-link__title">
                            <h3>{{ strtoupper($deporte->nombre) }}</h3>
                        </div>
                    </a>
                    @empty
                        No hay deportes
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
                    @if(session()->has('categorias'))
                    @forelse(session('categorias') as $categoria)
                    <a href="{{ route('productos.indexCategoria',$categoria) }}" class="menu-link" style="background-image: url('/storage/{{ $categoria->imagen }}');">
                        <div class="menu-link__title">
                            <h3>{{ strtoupper($categoria->nombre) }}</h3>
                        </div>
                    </a>
                    @empty
                        No hay categorias
                    @endforelse
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
